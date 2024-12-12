<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PlantWateringController;



Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
Route::resource('plant_waterings', PlantWateringController::class);


// Route::get('/', function () {
//     return view('welcome');
// });


