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
Route::get('/bank','kycController@form')->name('kyc.form');
Route::post('/bank/submit','kycController@submitform')->name('kyc.form.submit');
Route::get('/table','kycController@gettable')->name('kyc.form.table');
Route::get('/bank/delete{id}','kycController@deleteform')->name('kyc.form.delete');
Route::get('/bank/edit{id}','kycController@editform')->name('kyc.form.edit');
Route::post('/bank/update{id}','kycController@updateform')->name('kyc.form.update');

