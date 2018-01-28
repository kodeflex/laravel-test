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

Route::prefix('v1')->middleware('auth:api')->group(function () {
  Route::get('/users', 'UserController@getAll');
  Route::get('/users/{id}', 'UserController@getOne');
  Route::post('/users', 'UserController@post');
  Route::put('/users/{id}', 'UserController@put');
  Route::delete('/users/{id}', 'UserController@delete');
});