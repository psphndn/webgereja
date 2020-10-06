<?php

use Illuminate\Support\Facades\Route; 

Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');

Route::group(['middleware' => 'auth'], function () {
	
	Route::get('home', 'HomeController@index')->name('home');
	Route::get('logout', 'AuthController@logout')->name('logout');
	Route::get('Code', 'HomeController@code')->name('code');
	Route::get('Loginadmin', 'HomeController@loginadmin')->name('loginadmin');
});

Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');
Route::post('/ir1', 'HomeController@ir1');
Route::post('/ir2', 'HomeController@ir2');
Route::post('/adm', 'HomeController@adm');

/*Route::get('qrcode', function () {
	return view('qrcode');
});*/

/*Route::get('qr-code-g', function () {

	\QrCode::size(150)
	->format('png')
	->generate('Novita', public_path('images/qrcode.png'));
	return view('qrCode');
});
*/
Route::get('loginadmin', function () {
	return view('lgadmin');
});