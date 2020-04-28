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

Route::group(["prefix" => '/materialcrewredux', "middleware" => 'auth:api'], function () {
    Route::group(["prefix" => 'flights'], function () {
        Route::get('/', 'FlightsController@index');
        Route::post('/', 'FlightsController@newFlight');
        Route::get('/schedule', 'FlightsController@getSchedule');
    });
});
