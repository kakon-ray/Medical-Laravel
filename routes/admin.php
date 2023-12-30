<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Doctor\DoctorController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\LetestNews\LetestNewsController;
use App\Http\Controllers\Admin\Services\ServicesController;



Route::middleware(['AdminAuth', 'VerifiedAdminEmail'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::post('admin/image/upload', [DoctorController::class, 'image_upload'])->name('admin.image.upload');
});


Route::name('dashboard.')->prefix('dashboard')->group(function () {

    Route::name('doctor.')->prefix('doctor')->group(function () {
        Route::middleware(['AdminAuth', 'VerifiedAdminEmail'])->group(function () {
            Route::get('add', [DoctorController::class, 'index'])->name('add');
            Route::get('manage', [DoctorController::class, 'manage_doctor'])->name('manage');
            Route::post('submit', [DoctorController::class, 'doctor_submit'])->name('submit');
            Route::get('update/{id}', [DoctorController::class, 'update_doctor'])->name('update');
            Route::post('update/submit', [DoctorController::class, 'doctor_update'])->name('update.submit');
            Route::get('delete', [DoctorController::class, 'delete_doctor']);
        });
    });


    
Route::name('news.')->prefix('news')->group(function () {
    Route::middleware(['AdminAuth', 'VerifiedAdminEmail'])->group(function () {
        Route::get('manage', [LetestNewsController::class, 'index'])->name('manage');
        Route::get('add', [LetestNewsController::class, 'add'])->name('add');
        Route::post('add.submit', [LetestNewsController::class, 'add_submit'])->name('add.submit');
        Route::get('update/{id}', [LetestNewsController::class, 'update_doctor'])->name('update');
        Route::post('update/submit', [LetestNewsController::class, 'news_update_submit'])->name('update.submit');
        Route::get('delete', [LetestNewsController::class, 'delete_news']);
    });
});

Route::name('services.')->prefix('services')->group(function () {
    Route::middleware(['AdminAuth', 'VerifiedAdminEmail'])->group(function () {
        Route::get('manage', [ServicesController::class, 'index'])->name('manage');
        Route::get('add', [ServicesController::class, 'add'])->name('add');
        Route::post('add.submit', [ServicesController::class, 'add_submit_services'])->name('add.submit');
        Route::get('update/{id}', [ServicesController::class, 'update_services'])->name('update');
        Route::post('update/submit', [ServicesController::class, 'services_update_submit'])->name('update.submit');
        Route::get('delete', [ServicesController::class, 'delete_services']);
    });
});

Route::name('appointment.')->prefix('appointment')->group(function () {
    Route::middleware(['AdminAuth', 'VerifiedAdminEmail'])->group(function () {
        Route::get('manage', [DashboardController::class, 'appointment'])->name('manage');
        Route::get('delete', [DashboardController::class, 'delete_appointment']);
    });
});
Route::name('contact.')->prefix('contact')->group(function () {
    Route::middleware(['AdminAuth', 'VerifiedAdminEmail'])->group(function () {
        Route::get('manage', [DashboardController::class, 'contact_manage'])->name('manage');
        Route::get('delete', [DashboardController::class, 'delete_contact_manage']);
    });
});




    

});







