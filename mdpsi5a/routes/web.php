<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//tes

Route::get('/home', function () {
    return view('home');
});