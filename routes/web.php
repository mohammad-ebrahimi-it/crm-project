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


Route::post('customer/store', 'CustomerController@store');
Route::post('employee/store', 'EmployeeController@store');
Route::post('prospect/store', 'ProspectController@store');
Route::post('empPros/store', 'EmployeeProspectController@store');
Route::post('cusEmp/store', 'CustomerEmployeeController@store');

Route::get('employee/delete/{id}', 'EmployeeController@destroy');
Route::get('prospect/delete/{id}', 'ProspectController@destroy');
Route::get('customer/delete/{id}', 'ProspectController@destroy');


Route::get('empPros/get', 'EmployeeProspectController@index');
Route::get('cusEmp/get', 'CustomerEmployeeController@index');

Route::get('prospect/get', 'ProspectController@index');

