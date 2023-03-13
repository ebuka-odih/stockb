<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'pages.index')->name('index');

Auth::routes(['verify' => true]);
include 'admin.php';

Route::get('/home', 'HomeController@index')->name('home');
Route::view('demo', 'demo');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('myaccount', 'UserController@myAccount')->name('myAccount');
    Route::get('profile', 'UserController@profile')->name('profile');
    Route::patch('update/profile', 'UserController@updateProfile')->name('updateProfile');
    Route::get('security', 'UserController@security')->name('security');

    Route::get('deposit', 'DepositController@deposit')->name('deposit');
    Route::post('process/crypto/deposit', 'DepositController@processCrypto')->name('processCrypto');
    Route::get('bank-transfer/deposit/', 'DepositController@bankTransfer')->name('bankTransfer');
    Route::post('process/bank-transfer/deposit/', 'DepositController@processBank')->name('processBank');
    Route::get('bank-transfer/deposit/info/{id}', 'DepositController@bankInfo')->name('bankInfo');
    Route::get('crypto/deposit/{id}', 'DepositController@crypto')->name('deposit.crypto');
    Route::patch('process/payment/QH5H3Q642GER', "DepositController@processPayment")->name('processPayment');

    Route::get('stocks', "StockController@stocks")->name('stocks');
    Route::get('invest/{id}/stock', "StockController@invest")->name('invest');
    Route::post('invest/stock', "StockController@investStock")->name('investStock');
    Route::get('stock/{id}/success', "StockController@success")->name('success');

    Route::get('crypto-asset', 'CryptoController@crypto')->name('crypto');
    Route::get('invest/{id}/crypto', 'CryptoController@invest')->name('invest_crypto');
    Route::post('invest/crypto', 'CryptoController@investCrypto')->name('investCrypto');
    Route::get('crypto/{id}/success', "CryptoController@success")->name('crypto.success');


});
