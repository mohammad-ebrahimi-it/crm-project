<?php

use Illuminate\Support\Facades\Route;

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
    return view('panel');
});
//middleware('auth')->
Auth::routes();

Route::get('/vue', function (){
    return view('test');
});

Route::get('/home', 'HomeController@index')->name('home');
