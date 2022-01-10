<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login', ['name' => 'James']);
})->name('login');

Route::post('/do_register','UserController@register_user');
Route::view('/register', 'register')->name('register');
