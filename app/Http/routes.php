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
		$process = App\Imagenes::all()->where('status', 'process')->where('id_user', Auth::user()->id);
		$no_process = App\Imagenes::all()->where('status', 'no_process')->where('id_user', Auth::user()->id);
	}
	else{
		$process = App\Imagenes::all()->where('status', 'process');
		$no_process = App\Imagenes::all()->where('status', 'no_process');	
	}

    return view('welcome', compact('process', 'no_process'));
});

Route::get('/download/{file}', array(
	'as' => 'upload',
	'uses' => 'ImagesController@downloadFile',
));

Route::post('/upload', array(
	'as' => 'upload',
	'uses' => 'PedidosController@noMember',
));

Route::post('/upload-images', 'ImagesController@store');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

Route::get('/register', 'UserController@store');

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
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PedidosController@getPaymentStatus',
));
