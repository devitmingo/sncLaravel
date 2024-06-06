<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;


Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/about-us',[WebController::class,'aboutus'])->name('aboutus');
Route::get('/our-gallery',[WebController::class,'ourgallery'])->name('ourgallery');
Route::get('/contact-us',[WebController::class,'contactus'])->name('contactus');

// Admin route 
 Route::get('/login',[AdminController::class,'admin'])->name('admin');
 Route::post('/login',[AdminController::class,'login'])->name('login');

 Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

    Route::resource('/gallery',GalleryController::class);
    Route::resource('/employee',EmployeeController::class);
    Route::get('/blog',[AdminController::class,'blog'])->name('blog');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::resource('/user',UserController::class);
    Route::get('/admin/logout',[AdminController::class,'logout'])->name('logout');
 });