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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', ['as' => 'login', 'uses' => 'IndexController@login']);

Route::get('/logout', ['as' => 'logout', 'uses' => function() {
    Auth::logout();
    return redirect('/');
}])->middleware('auth');

Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback');
