<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Doctor\DoctorController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;


Route::name('admin.')->prefix('admin')->group(function () {

    Route::middleware(['AdminAuth','VerifiedAdminEmail'])->group(function (){
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    });
    Route::middleware(['AdminAuth','VerifiedAdminEmail'])->group(function (){
        Route::get('doctor', [DoctorController::class, 'index'])->name('doctor');
        Route::get('doctor/manage', [DoctorController::class, 'manage_doctor'])->name('doctor.manage');
    });

});