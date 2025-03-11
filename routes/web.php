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
Route::get('/widgets', function () {
    return view('widgets');
});
Route::get('/indexAdmin', function () {
    return view('indexAdmin');
});
Route::get('/datatables', function () {
    return view('datatables');
});
