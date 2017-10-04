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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/words/newwords','WordController@newWords')->name('words');

Route::post('/words','WordController@store');

Route::get('/recover', 'RecoverController@index')->name('recover');

Route::get('/recover/oneday', 'RecoverController@oneday');

Route::get('/recover/oneweek', 'RecoverController@oneweek');

Route::get('/recover/onemonth', 'RecoverController@onemonth');