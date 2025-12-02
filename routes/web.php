<?php

use Illuminate\Support\Facades\Route;

// front
use App\Http\Controllers\Front\HomeController as HomeControllerForFront; 


// admin
use App\Http\Controllers\Admin\HomeController as HomeControllerForAdmin; 
use App\Http\Controllers\Admin\AuthController as AuthControllerForAdmin; 

 /* ========= main ========= */
Route::get('/', [HomeControllerForFront::class,'index'])->name('home.index');


// admin route'ai
Route::middleware(['auth','admin'])->group(function () { 
    /* ========= main ========= */
    Route::get('/admin',       [HomeControllerForAdmin::class,'index'])->name('admin.index');

    /* ========= admin auth ========= */
    Route::get('/admin/login', [HomeControllerForAdmin::class,'index'])->name('admin.login');

    /* ========= admin auth ========= */
    //Route::get('/admin/login', [HomeControllerForAdmin::class,'index'])->name('admin.login');
});