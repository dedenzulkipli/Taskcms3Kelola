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
    return view('widgets');
});
Route::get('/indexAdmin', function () {
    return view('indexAdmin');
});
Route::get('/datatables', function () {
    return view('datatables');
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
