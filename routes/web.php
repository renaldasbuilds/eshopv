<?php

use Illuminate\Support\Facades\Route;

// front
use App\Http\Controllers\Front\HomeController as HomeControllerForFront; 


// admin
use App\Http\Controllers\Admin\HomeController as HomeControllerForAdmin; 
use App\Http\Controllers\Admin\AuthController as AuthControllerForAdmin; 
use App\Http\Controllers\Admin\SettingsController as SettingsControllerForAdmin;

use App\Http\Controllers\Admin\CategoryController as CategoryControllerForAdmin;

 /* ========= main ========= */
Route::get('/', [HomeControllerForFront::class,'index'])->name('home.index');

/* ========= admin auth ========= */
Route::get('/login',           [AuthControllerForAdmin::class,'login'])->name('login');
Route::post('/login/store' ,   [AuthControllerForAdmin::class,'login_store'])->name('login.store');


/* ========= middleware register apsauga  ========= */
Route::middleware(['admin.register.enabled'])->group(function () {
    Route::get('/register',        [AuthControllerForAdmin::class,'register'])->name('register');
    Route::post('/register/store' ,[AuthControllerForAdmin::class,'register_store'])->name('register.store');
});

// admin route'ai
Route::middleware(['auth','admin'])->group(function () { 

    /* ========= dash/main ========= */
    Route::get('/admin',            [HomeControllerForAdmin::class,'index'])->name('admin.index');

    /* ===== logout ===== */
    Route::get('/admin/atsijungti' ,[AuthControllerForAdmin::class,'logout'])->name('admin.logout');

     /* ===== puslapio nustatymai ===== */
    Route::get('/admin/nustatymai' ,            [SettingsControllerForAdmin::class,'index'])->name('admin.site_settings');
    Route::put('/admin/nustatymai/atnaujinti' , [SettingsControllerForAdmin::class,'update'])->name('admin.site_settings.update');

    /* ===== prekiu kategorijos ===== */

    Route::get('/admin/kategorijos',                  [CategoryControllerForAdmin::class,'index'])->name('admin.category.index');
    Route::get('/admin/kategorijos/prideti',          [CategoryControllerForAdmin::class,'create'])->name('admin.category.create');
    Route::get('/admin/kategorijos/store',            [CategoryControllerForAdmin::class,'create'])->name('admin.category.store');
    Route::delete('/admin/kategorijos/istrinti/{id}', [CategoryControllerForAdmin::class,'destroy'])->name('admin.category.destroy');
});