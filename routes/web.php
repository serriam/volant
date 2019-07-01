<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => ['web']], function(){
	Route::get('/', 'pagesController@getIndex');
	Route::get('/contact', 'pagesController@getContact');
	Route::get('/packages', 'pagesController@getPackage');
	

	Route::resource('orders', 'orderController');

	Route::post('orders/distance', 'orderController@distance')->name('orders.distance');
	Route::post('orders/serve', 'orderController@service')->name('orders.serve');
	Route::get('/service/{id}', 'orderController@serve');
	Route::post('orders/confirm', 'orderController@confirm')->name('orders.confirm');
	Route::post('orders/deleteorder', 'orderController@deleteorder')->name('orders.deleteorder');
});

Auth::routes();

Route::get('send', 'AdminController@sendNotification');

Route::get('auth/{provider}', 'Auth\LoginController@redirect');
Route::get('auth/{provider}/callback', 'Auth\LoginController@callback');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admins', 'Auth\adminLoginController@admins')->name('admins');

Route::post('/adminLogin', 'Auth\adminLoginController@adminlogin')->name('adminLogin');
Route::post('/createAdmin', 'Auth\adminRegisterController@createAdmin')->name('createAdmin');
Route::get('/register_admin', 'Auth\adminRegisterController@register_admin')->name('register_admin');
Route::post('/Logout', 'Auth\adminLoginController@logout')->name('Logout');
Route::post('/logout', 'Auth\LoginController@userlogout')->name('logout');
Route::get('/Latest', 'AdminController@latest')->name('Latest');


