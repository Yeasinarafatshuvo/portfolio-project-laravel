<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FrontDataController;



Route::get('/', [HomeController::class, 'index']);
Route::post('/frontend/contact', [ContactController::class, 'contact_post'])->name('contact.post');



// All backend route--------------->

Route::get('/admin/login', [LoginController::class, 'login']);
Route::post('/admin/login/check', [LoginController::class, 'check_login'])->name('login.check');
Route::get('/admin/dashboard', [DashboardController::class, 'admin_dashboard']);
Route::get('/admin/registration', [LoginController::class, 'registration']);
Route::post('/admin/registration/store', [LoginController::class, 'registration_store'])->name('registration.store');

//profile route
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
Route::get('/admin/dashboard/banner/edit/{id}', [DashboardController::class, 'banner_edit'])->name('banner.edit');
Route::post('/admin/dashboard/banner/update/{id}', [DashboardController::class, 'banner_update'])->name('banner.update');

//Education route
Route::get('/admin/dashboard/education/view', [DashboardController::class, 'education_view'])->name('education.view');
Route::get('/admin/dashboard/education/add', [DashboardController::class, 'education_add'])->name('education.add');
Route::post('/admin/dashboard/education/store', [DashboardController::class, 'education_store'])->name('education.store');
Route::get('/admin/dashboard/education/edit/{id}', [DashboardController::class, 'education_edit'])->name('education.edit');
Route::post('/admin/dashboard/education/update/{id}', [DashboardController::class, 'education_update'])->name('education.update');
Route::get('/admin/dashboard/education/delete/{id}', [DashboardController::class, 'education_delete'])->name('education.delete');

//Expericance route
Route::get('/admin/dashboard/experience/view', [DashboardController::class, 'experience_view'])->name('experience.view');
Route::get('/admin/dashboard/experience/add', [DashboardController::class, 'experience_add'])->name('experience.add');
Route::post('/admin/dashboard/experience/store', [DashboardController::class, 'experience_store'])->name('experience.store');
Route::get('/admin/dashboard/experience/edit/{id}', [DashboardController::class, 'experience_edit'])->name('experience.edit');
Route::post('/admin/dashboard/experience/update/{id}', [DashboardController::class, 'experience_update'])->name('experience.update');
Route::get('/admin/dashboard/experience/delete/{id}', [DashboardController::class, 'experience_delete'])->name('experience.delete');



