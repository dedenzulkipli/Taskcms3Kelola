<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', function () {
    return view('landing.index');
});
Route::get('/portfolio-details', function () {
    return view('landing.portfolio-details');
});
Route::get('/service-details', function () {
    return view('landing.service-details');
});
Route::get('/widgets', function () {
    return view('admin.widgets');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/datatables', function () {
    return view('admin.datatables');
});
Route::get('/dataservice', function () {
    return view('admin.dataservices');
});






















Route::get('coba', function() {
    return view('admin.coba');
});

Route::get('/', function() {
    return view('landing.index');
});
Route::get('/blog-details', function () {
    return view('landing.blog-details');
});
Route::get('/blog', function () {
    return view('landing.blog');
});
