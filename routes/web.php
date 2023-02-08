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
    Route::get('myaccount', 'UserController@myAccount')->name('myAccount');

    Route::get('deposit', 'DepositController@deposit')->name('deposit');
    Route::post('process/crypto/deposit', 'DepositController@processCrypto')->name('processCrypto');
    Route::get('bank-transfer/deposit/', 'DepositController@bankTransfer')->name('bankTransfer');
    Route::post('process/bank-transfer/deposit/', 'DepositController@processBank')->name('processBank');
    Route::get('bank-transfer/deposit/info/{id}', 'DepositController@bankInfo')->name('bankInfo');
    Route::get('crypto/deposit/{id}', 'DepositController@crypto')->name('crypto');
    Route::patch('process/payment/QH5H3Q642GER', "DepositController@processPayment")->name('processPayment');

    Route::get('stocks', "StockController@stocks")->name('stocks');

});
