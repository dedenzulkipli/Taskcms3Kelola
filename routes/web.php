<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});
Route::get('/service-details', function () {
    return view('service-details');
});
