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

// Route::get('/home', function () {
//     return view('register');
// });

Route::get('/register', 'HomeController@register');
Route::get('/home', 'HomeController@home');
Route::post('/register_post', 'HomeController@register_post');

Route::get('/login', 'LoginController@login');
Route::post('/login_post', 'LoginController@login_post');