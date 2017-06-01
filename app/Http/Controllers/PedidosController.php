<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

use App\Http\Requests;
use Session;
use App\Pedidos;
use App\PedidoImagen;
use App\User;
use App\Imagenes;
use App\Plan;
use Auth;
use Redirect;

class PedidosController extends Controller
{

    public $_api_context;
    public function __construct()
    {
        // setup PayPal api context
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function postPayment()
    {
        // create new Payer
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $items = array();
        $subtotal = 0;

        // get images of status (No Process) and User
        $cart = Imagenes::all()->where('status', 'no_process')->where('id_user', Auth::user()->id);
        \Session::put('cart', $cart);
        $currency = 'USD';

        foreach($cart as $producto){
            $item = new Item();
            $item->setName($producto->name)
            ->setCurrency($currency)
            ->setDescription('Foto')
            ->setQuantity(1)
            ->setPrice(10);
            $items[] = $item;
            $subtotal += 1 * 10;
        }

        // add items at ItemList
        $item_list = new ItemList();
        $item_list->setItems($items);
        // add details of order
        $details = new Details();
        $details->setSubtotal($subtotal)
        ->setShipping(0);
        $total = $subtotal;

        $amount = new Amount();
        $amount->setCurrency($currency)
            ->setTotal($total)
            ->setDetails($details);

        // create new Transaction
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Pedido de Fotos');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
            ->setCancelUrl(\URL::route('payment.status'));

        // create new Payment
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Ups! Algo salió mal');
            }
        }
        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        // add payment ID to session
        // \Session::put('paypal_payment_id', $payment->getId());
        if(isset($redirect_url)) {
            // redirect to paypal
            return \Redirect::away($redirect_url);
        }
        return \Redirect::to('/');
    }

    public function getPaymentStatus()
    {
        // Get the payment ID
        $paymentId = \Request::get('paymentId');
        // clear the session payment ID
        \Session::forget('paypal_payment_id');
        $payerId = \Request::get('PayerID');
        $token = \Request::get('token');
        //if (empty(\Request::get('PayerID')) || empty(\Request::get('token'))) {
        if (empty($payerId) || empty($token)) {
            return \Redirect::to('/')
                ->with('message', 'Hubo un problema al intentar pagar con Paypal');
        }
        
        try {
            $payment = Payment::get($paymentId, $this->_api_context);
        } catch (Exception $ex) {
             if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
               die('Ups! Algo salió mal');
            }
        }

        // PaymentExecution object includes information necessary 
        // to execute a PayPal account payment. 
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        try {
            $execution = new PaymentExecution();
            $execution->setPayerId(\Request::get('PayerID'));
            //Execute the payment
            $result = $payment->execute($execution, $this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Ups! Algo salió mal');
            }
        }
        
        //echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later
        if ($result->getState() == 'approved') { // payment made
            // Registrar el pedido --- ok
            // Registrar el Detalle del pedido  --- ok
            // Eliminar carrito 
            // Enviar correo a user
            // Enviar correo a admin
            // Redireccionar
            $this->saveOrder(\Session::get('cart'));
            dd(\Session::get('cart'));
            \Session::forget('cart');
            return \Redirect::to('/')->with('message', 'Payment Registred');
        }
        return \Redirect::to('/')->with('message', 'Error!');
    }

    private function saveOrder($cart)
    {
        $total = 0;
        foreach($cart as $item){
            $total += 1 * 10;
        }
        
        // get description in Session
        $description = Session::get('description');

        if(Session::get('newMember') == 1)
        {
            // create new User if not registred
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->email);
            $user->rol_id = 2;
            $user->remember_token = Session::token();
            $user->save();

            $plan = new Plan;
            $plan->name = 'non-member';
            $plan->id_user = $user->id;
            $plan->save();


            // create new Order
            $order = Pedidos::create([
                'price' => $total,
                'description' => ''+$description,
                'created', new \DateTime(),
                'id_user' => $user->id
            ]);

            // get cart in the Session
            $cart = Session::get('cart');

            foreach($cart as $file){
                $fileName = $file->getClientOriginalName();
                
                $name = Carbon::now()->second.$fileName;
                \Storage::disk('local')->put($name, \File::get($file));
                
                $imagen = new Imagenes;
                $imagen->name = $name;
                $imagen->status = 'process';
                $imagen->send = 'no';
                $imagen->id_user = Auth::user()->id;
                $imagen->save();
                $carts[] = $imagen;
            }

            foreach($carts as $item){
                $this->saveOrderItem($item, $order->id);

                \Session::forget('newMember');
                \Session::forget('description');
                \Session::forget('email');
            }
        }
        else{

            // create new Order
            $order = Pedidos::create([
                'price' => $total,
                'description' => ''+$description,
                'created', new \DateTime(),
                'id_user' => \Auth::user()->id
            ]);

            foreach($cart as $item){
                $this->saveOrderItem($item, $order->id);

                $imagen = Imagenes::find($item->id);
                $imagen->status = 'process'; // change status Img
                $imagen->save();
            }  
        }
    }
    
    private function saveOrderItem($item, $order_id)
    {
        PedidoImagen::create([
            'id_imagen' => $item->id,
            'id_pedido' => $order_id
        ]);
    }

    public function noMember(Request $request)
    {
        // push data in the Session
        Session::put('cart', $request->foto);
        Session::put('email', $request->email);
        Session::put('description', $request->description);
        Session::flash('newMember', 1);

        // create new PAyer
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $items = array();
        $subtotal = 0;
        $cart = Session::get('cart');
        $currency = 'USD';

        foreach($cart as $producto){
            $fileName = $producto->getClientOriginalName();
            $item = new Item();
            $item->setName($fileName)
            ->setCurrency($currency)
            ->setDescription(Session::get('description'))
            ->setQuantity(1)
            ->setPrice(15);
            $items[] = $item;
            $subtotal += 1 * 15;
        }

        // list of items
        $item_list = new ItemList();
        $item_list->setItems($items);
        $details = new Details();
        $details->setSubtotal($subtotal)
        ->setShipping(0);
        $total = $subtotal;

        $amount = new Amount();
        $amount->setCurrency($currency)
            ->setTotal($total)
            ->setDetails($details);

        // create new Transaction
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Pedido de prueba en mi Laravel App Store');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
            ->setCancelUrl(\URL::route('payment.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Ups! Algo salió mal');
            }
        }
        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        // add payment ID to session
        \Session::put('paypal_payment_id', $payment->getId());
        if(isset($redirect_url)) {
            // redirect to paypal
            return \Redirect::away($redirect_url);
        }
        return \Redirect::to('/');
    }
}
