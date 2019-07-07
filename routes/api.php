<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('order_rest', 'ordersrestController@index');

//show
Route::get('order_rest/{id}', 'ordersrestController@show');

//create
Route::post('order_rest', 'ordersrestController@store');

//update
Route::put('order_rest/{id}', 'ordersrestController@update');

//delete
Route::delete('order_rest/{id}', 'ordersrestController@destroy');