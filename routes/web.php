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

Route::get('/', 'IndexController@index')->name('index');

Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
Route::post('/customer/store', 'CustomerController@store')->name('customer.store');

Route::get('/customer/login', 'CustomerController@login')->name('customer.login');
Route::post('/customer/login', 'CustomerController@loginStore')->name('customer.login.store');
