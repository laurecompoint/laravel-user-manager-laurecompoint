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



Route::apiResource('/users', 'UserApiController');
Route::apiResource('/user', 'UserApiController');

Route::middleware('api')->post('/users-add', 'UserApiController@create');
Route::middleware('api')->post('/users-delete/{id}', 'UserApiController@destroy');
Route::middleware('api')->post('/users-update/{id}', 'UserApiController@update');

