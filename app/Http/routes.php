<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	if(Auth::user()){
		$process = App\Imagenes::orderBy('created_at', 'desc')->where('status','process')->get();
		$processUser = App\Imagenes::orderBy('created_at', 'desc')->where('status','process')->where('id_user', Auth::user()->id)->get();
		$urgent = App\Imagenes::orderBy('created_at', 'desc')->where('urgent', 'yes')->where('status', 'process')->get();
		$no_process = App\Imagenes::orderBy('created_at', 'desc')->where('status', 'no_process')->where('id_user', Auth::user()->id)->get();
		$plan = App\Plan::orderBy('id', 'desc')->where('id_user', Auth::user()->id)->take(1)->get();
		$send = App\ImagenEditada::where('id_user', Auth::user()->id)->get();

		$sendTotal = App\ImagenEditada::all();

		$editing = App\Imagenes::orderBy('created_at', 'desc')->where('status', 'editing')->where('send', 'no')->get();
		foreach ($plan as $key => $value) {
			$fecha1=strtotime($value->final);
			$fecha2=strtotime(date('Y-m-d'));

			if($fecha1 < $fecha2){
				$plann = new App\Plan();
	            $plann->name = 'non-member';
	            $plann->id_user = Auth::user()->id;
	            $plann->save();

	            $plan = App\Plan::orderBy('id', 'desc')->where('id_user', Auth::user()->id)->take(1)->get();
	        }
		}

    	return view('welcome', compact('process', 'processUser','no_process', 'plan', 'send', 'editing', 'sendTotal', 'urgent'));
	}
	else{
		$process = App\Imagenes::all()->where('status', 'process');
		$no_process = App\Imagenes::all()->where('status', 'no_process');

		return view('welcome', compact('process', 'no_process'));
	}


});

Route::get('/download/{file}', array(
	'as' => 'upload',
	'uses' => 'ImagesController@downloadFile',
));

Route::post('/upload', array(
	'as' => 'upload',
	'uses' => 'PedidosController@noMember',
));

Route::post('/buyPlan', array(
	'as' => 'buyPlan',
	'uses' => 'PlanController@store',
));

Route::post('/changeStatusEditing', array(
	'as' => 'changeStatusEditing',
	'uses' => 'ImagesController@changeStatus',
));

Route::post('/uploadNewImage', 'ImagesController@uploadNewImage');
Route::post('/upload-images', 'ImagesController@store');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

Route::post('/register', 'UserController@store');

Route::resource('user', 'UserController');
Route::resource('images', 'ImagesController');
Route::resource('login', 'LoginController');
Route::resource('pedido', 'PedidosController');

// Paypal
// Enviamos nuestro pedido a PayPal
Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PedidosController@postPayment',
));
// Después de realizar el pago Paypal redirecciona a esta ruta
Route::get('payment/statuss', array(
	'as' => 'payment.statuss',
	'uses' => 'PedidosController@getPaymentStatus',
));

// Después de realizar el pago Paypal redirecciona a esta ruta
Route::get('payment/status', array(
	'as' => 'payment.status2',
	'uses' => 'PlanController@getPaymentStatus',
));
