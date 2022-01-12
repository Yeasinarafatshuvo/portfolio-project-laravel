<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DashboardController;



Route::get('/', [HomeController::class, 'index']);
Route::get('/admin/login', [LoginController::class, 'login']);
Route::post('/admin/login/check', [LoginController::class, 'check_login'])->name('login.check');
Route::get('/admin/dashboard', [DashboardController::class, 'admin_dashboard']);
Route::get('/admin/registration', [LoginController::class, 'registration']);
Route::post('/admin/registration/store', [LoginController::class, 'registration_store'])->name('registration.store');
Route::get('/admin/dashboard/profile/view', [DashboardController::class, 'profile_view'])->name('admin.dashboard');
