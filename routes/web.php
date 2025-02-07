<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/take-quiz', function () {
    return view('take-quiz');
});
