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

Route::group(["prefix" => '/materialcrewredux'], function () {
    Route::get('/user', 'ProfileController@index');
    Route::group(["prefix" => 'flights'], function () {
        Route::get('/', 'FlightsController@index');
        Route::post('/', 'FlightsController@createBid');
        Route::get('/schedule', 'FlightsController@getSchedule');
    });
});
