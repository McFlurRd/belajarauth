<?php

use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function (){
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', 'Auth\LogoutController');
    Route::view('/protected', 'protected');


});


Route::view('/', 'home');
