<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProjectsTableController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::resource('employees', EmployeesController::class);
Route::resource('service', ServiceController::class);
Route::resource('clients', ClientsController::class);
Route::resource('blogs', BlogsController::class);
Route::resource('projects', ProjectsTableController::class);
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'auth'])->name('auth');
Route::get('/dashboard',[AuthController::class,'dashboard'])->name("dashboard");

