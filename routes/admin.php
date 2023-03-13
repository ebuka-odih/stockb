<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    Route::get('setting', 'Admin\AdminController@setting')->name('setting');
    Route::get('add-deposit', 'Admin\AdminController@addDeposit')->name('addDeposit');
    Route::post('add-deposit', 'Admin\AdminController@adminProDeposit')->name('adminProDeposit');

    Route::get('users', "Admin\UserController@users")->name('users');
    Route::get('user/details/{id}', "Admin\UserController@viewUser")->name('viewUser');
    Route::get('verify/user/{id}', "Admin\UserController@verifyUser")->name('verifyUser');
    Route::get('user/withdrawal/method/{id}', "Admin\UserController@userWithdrawMethod")->name('userWithdrawMethod');
    Route::delete('delete/user/{id}', "Admin\UserController@deleteUser")->name('deleteUser');

    Route::resource('wallet', "Admin\PaymentMethodController");
    Route::resource('stocks', 'Admin\AdminStock');
    Route::resource('crypto', 'Admin\AdminCrypto');

    Route::get('deposits', 'Admin\AdminDeposits@deposits')->name('deposits');
    Route::get('approve/{id}/deposit', 'Admin\AdminDeposits@approveDeposit')->name('approveDeposit');
    Route::delete('delete/{id}/deposit', 'Admin\AdminDeposits@deleteDeposit')->name('deleteDeposit');
    Route::get('fund/user', "Admin\AdminDeposits@fund")->name('fund');
    Route::post('fund/user', "Admin\AdminDeposits@sendFund")->name('sendFund');
    Route::get('funding/history', "Admin\AdminDeposits@fundingHistory")->name('fundingHistory');
    Route::delete('delete/{id}/funding', "Admin\AdminDeposits@deleteFunding")->name('deleteFunding');


    Route::get('withdrawals', "Admin\AdminWithdrawal@withdrawals")->name('withdrawals');

    Route::get('purchased/stocks', "Admin\AdminPurchasedStock@purchasedStocks")->name('purchasedStocks');
    Route::delete('delete/{id}/purchased-stocks', "Admin\AdminPurchasedStock@deletePurchasedStock")->name('deletePurchasedStock');
    Route::get('purchased/crypto', "Admin\AdminPurchasedCrypto@purchasedCrypto")->name('purchasedCrypto');


});

