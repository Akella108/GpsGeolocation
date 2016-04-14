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
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/account', ['as' => 'account', 'uses' => 'AccountController@index']);
//Route::get('/account', function() {
//    return view('account');
//});

Route::get('/car', ['as' => 'car', 'uses' => 'CarController@index']);
//Route::get('/car', ['as' => 'car', 'uses' => 'CarController@addCar']);
Route::post('/car', ['as' => 'addCar', 'uses' => 'CarController@addCar']);
Route::get('/car/edit/{id}', ['as' => 'editCar', 'uses' => 'CarController@editCar']);
Route::post('/car/update/{id}', ['as' => 'updateCar', 'uses' => 'CarController@updateCar']);

Route::get('/tracker', ['as' => 'tracker', 'uses' => 'GpsTrackerController@index']);
Route::post('/tracker', ['as' => 'addTracker', 'uses' => 'GpsTrackerController@addTracker']);


