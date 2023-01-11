<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    Route::get('users', 'Admin\AdminController@users')->name('users');
    Route::get('user/details/{id}', 'Admin\AdminController@userDetails')->name('userDetails');
    Route::delete('delete/user', 'Admin\AdminController@deleteUser')->name('deleteUser');

    //Stocks Routes
    Route::resource('stocks', 'Admin\AdminStock');
});

