<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProjectsTableController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('employees', EmployeesController::class);
Route::resource('service', ServiceController::class);
Route::resource('clients', ClientsController::class);
Route::resource('blogs', BlogsController::class);
Route::resource('projects', ProjectsTableController::class);


Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});
Route::get('/service-details', function () {
    return view('service-details');
});
