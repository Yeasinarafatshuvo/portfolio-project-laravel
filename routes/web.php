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

//about route
Route::get('/admin/dashboard/about/add', [DashboardController::class, 'about_add'])->name('about.add');
Route::get('/admin/dashboard/about/view', [DashboardController::class, 'about_view'])->name('about.view');
Route::post('/admin/dashboard/about/store', [DashboardController::class, 'about_store'])->name('about.store');
Route::get('/admin/dashboard/about/edit/{id}', [DashboardController::class, 'about_edit'])->name('about.edit');
Route::get('/admin/dashboard/about/edit/{id}', [DashboardController::class, 'about_edit'])->name('about.edit');
Route::post('/admin/dashboard/about/update/{id}', [DashboardController::class, 'about_update'])->name('about.update');

//skill route
Route::get('/admin/dashboard/skill/view', [DashboardController::class, 'skill_view'])->name('skill.view');
Route::get('/admin/dashboard/skill/add', [DashboardController::class, 'skill_add'])->name('skill.add');
Route::post('/admin/dashboard/skill/post', [DashboardController::class, 'skill_store'])->name('skill.store');
Route::get('/admin/dashboard/skill/edit/{id}', [DashboardController::class, 'skill_edit'])->name('skill.edit');
Route::post('/admin/dashboard/skill/update/{id}', [DashboardController::class, 'skill_update'])->name('skill.update');
Route::get('/admin/dashboard/skill/delete/{id}', [DashboardController::class, 'skill_delete'])->name('skill.delete');

//banner route
Route::get('/admin/dashboard/banner/view', [DashboardController::class, 'banner_view'])->name('banner.view');
Route::get('/admin/dashboard/banner/add', [DashboardController::class, 'banner_add'])->name('banner.add');
Route::post('/admin/dashboard/banner/store', [DashboardController::class, 'banner_store'])->name('banner.store');





