<?php

use App\Http\Controllers\User\Dashboard\DashboardController;
use App\Http\Controllers\User\UserGuest\UserGuestController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserGuestController::class, 'home'])->name('home');

Route::name('user.')->prefix('user')->group(function () {

        Route::get('/clinic', [UserGuestController::class, 'clinic'])->name('clinic');
        Route::get('/doctor', [UserGuestController::class, 'doctor'])->name('doctor');
        Route::get('/services', [UserGuestController::class, 'services'])->name('services');
        Route::get('/appointment', [UserGuestController::class, 'appointment'])->name('appointment');
        Route::get('/contact', [UserGuestController::class, 'contact'])->name('contact');
        Route::post('/add-apppointment', [UserGuestController::class, 'add_apppointment'])->name('add.apppointment');

});


require __DIR__.'/auth.php';
require __DIR__.'/admin_auth.php';
