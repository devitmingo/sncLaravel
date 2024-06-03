<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/about-us',[WebController::class,'aboutus'])->name('aboutus');
Route::get('/contact-us',[WebController::class,'contactus'])->name('contactus');