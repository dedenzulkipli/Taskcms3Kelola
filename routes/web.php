<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});
Route::get('/portfolio-details', function () {
    return view('landing.portfolio-details');
});
Route::get('/service-details', function () {
    return view('landing.service-details');
});
Route::get('/blog-details', function () {
    return view('landing.blog-details');
});
Route::get('/blog', function () {
    return view('landing.blog');
});