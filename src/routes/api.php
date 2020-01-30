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

Route::namespace('Api')->name('api.')->group(function(){

    Route::prefix('usuarios')->group(function(){
        //Route GET
        Route::middleware('auth:api')->get('/', 'UserController@index')->name('index_users');
        Route::get('/{id}', 'UserController@show')->name('show_users');
        //Route Post
        Route::post('/', 'UserController@store')->name('store_users');
    });

    Route::prefix('pedidos')->group(function(){
        //Route GET
        Route::get('/', 'PedidoController@index')->name('index_pedidos');
        Route::get('/{id}', 'PedidoController@show')->name('show_pedidos');
        //Route Post
        Route::post('/', 'PedidoController@store')->name('store_pedidos');
    });
});
