<?php

use Illuminate\Support\Facades\Route;

// front
use App\Http\Controllers\Front\HomeController as HomeControllerForFront; 


// admin
use App\Http\Controllers\Admin\HomeController as HomeControllerForAdmin; 
use App\Http\Controllers\Admin\AuthController as AuthControllerForAdmin; 

 /* ========= main ========= */
Route::get('/', [HomeControllerForFront::class,'index'])->name('home.index');

/* ========= admin auth ========= */
Route::get('/login',           [AuthControllerForAdmin::class,'login'])->name('login');

/* ========= middleware apsauga  ========= */
Route::middleware(['admin.register.enabled'])->group(function () {
    Route::get('/register',        [AuthControllerForAdmin::class,'register'])->name('register');
    Route::post('/register/store' ,[AuthControllerForAdmin::class,'register_store'])->name('register.store');
});

// admin route'ai
Route::middleware(['auth','admin'])->group(function () { 

    /* ========= main ========= */
    Route::get('/admin',       [HomeControllerForAdmin::class,'index'])->name('admin.index');   
        
});