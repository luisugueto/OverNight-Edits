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

class PlanController extends Controller
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
        $cantidad = $request->cantidad;
        \Session::put('cantidad', $cantidad);
        $price = $cantidad * 10;
        $user = $request->user;
        
        // create new Payer
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $items = array();
        $subtotal = 0;

        
        $currency = 'USD';

        $item = new Item();
        $item->setName('Plan Standar-Pricing')
            ->setCurrency($currency)
            ->setDescription('Buying plan by '+$cantidad+' month')
            ->setQuantity(1)
            ->setPrice($price);
            $items[] = $item;
            $subtotal += 1 * $price;
        

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
            ->setDescription('Compra de Plan Standar');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status2'))
            ->setCancelUrl(\URL::route('payment.status2'));

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
            Session::flash('panel', 1);
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
            $cantidad = \Session::get('cantidad');
            $fecha = new \DateTime();
            $intervalo = new \DateInterval('P'.$cantidad.'M');
            $fecha->add($intervalo);

            $plan = new Plan();
            $plan->name = 'standar';
            $plan->id_user = Auth::user()->id;
            $plan->final = $fecha->format('Y-m-d');
            $plan->save();
            
            Session::flash('panel', 1);
            \Session::forget('cantidad');
            return \Redirect::to('/')->with('message', 'Payment Registred. Your Plan is: Standar Pricing');
        }
        Session::flash('panel', 1);
        return \Redirect::to('/')->with('message', 'Error!');
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
}
