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
    Route::prefix('anunciantes')->group(function(){
        //Route GET
        Route::get('/', 'AnuncianteController@index')->name('index_anunciantes');
        Route::get('/{id}', 'AnuncianteController@show')->name('show_anunciantes');
        //Route Post
        Route::post('/', 'AnuncianteController@store')->name('store_anunciantes');
    });
});
