<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');

    Route::get('users', "Admin\UserController@users")->name('users');
    Route::get('user/details/{id}', "Admin\UserController@viewUser")->name('viewUser');
    Route::get('verify/user/{id}', "Admin\UserController@verifyUser")->name('verifyUser');
    Route::get('user/withdrawal/method/{id}', "Admin\UserController@userWithdrawMethod")->name('userWithdrawMethod');
    Route::delete('delete/user/{id}', "Admin\UserController@deleteUser")->name('deleteUser');


    //Stocks Routes
    Route::resource('stocks', 'Admin\AdminStock');
    //Crypto Routes
    Route::resource('crypto', 'Admin\AdminCrypto');


});

