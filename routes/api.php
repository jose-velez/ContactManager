<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::post('/login', 'Api\Auth\LoginController@login');

Route::get('/contacts/self', 'Api\ContactController@self');

Route::post('/contacts/create', 'Api\ContactController@store');

Route::get('/refresh', 'Api\Auth\LoginController@refresh');

Route::get('/contacts', 'Api\ContactController@index');
