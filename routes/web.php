<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProjectsTableController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::resource('employees', EmployeesController::class);
Route::resource('service', ServiceController::class);
Route::resource('clients', ClientsController::class);
Route::resource('blogs', BlogsController::class);
Route::resource('projects', ProjectsTableController::class);
Route::resource('contacts', ContactController::class);

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