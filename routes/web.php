<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
include 'admin.php';

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');

    Route::get('deposit', 'DepositController@deposit')->name('deposit');
    Route::post('process/deposit', 'DepositController@process')->name('process');
    Route::get('bank-transfer/deposit/{id}', 'DepositController@bankTransfer')->name('bankTransfer');
    Route::get('crypto/deposit/{id}', 'DepositController@crypto')->name('crypto');

});
