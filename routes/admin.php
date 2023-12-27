<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Doctor\DoctorController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;


Route::name('admin.')->prefix('admin')->group(function () {

    Route::middleware(['AdminAuth','VerifiedAdminEmail'])->group(function (){
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    });
    Route::middleware(['AdminAuth','VerifiedAdminEmail'])->group(function (){
        Route::get('doctor', [DoctorController::class, 'index'])->name('doctor.add');
        Route::get('doctor/manage', [DoctorController::class, 'manage_doctor'])->name('doctor.manage');
        Route::post('doctor/submit', [DoctorController::class, 'doctor_submit'])->name('doctor.submit');
        Route::get('doctor/update/{id}', [DoctorController::class, 'update_doctor'])->name('doctor.update');
        Route::post('doctor/update/submit', [DoctorController::class, 'doctor_update'])->name('update.doctor.submit');
       
        Route::get('doctor/delete', [DoctorController::class, 'delete_doctor']);
        
        
        Route::post('image/upload', [DoctorController::class, 'image_upload'])->name('image.upload');
    });

});