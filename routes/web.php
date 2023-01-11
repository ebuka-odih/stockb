<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
include 'admin.php';

Route::get('/home', 'HomeController@index')->name('home');
