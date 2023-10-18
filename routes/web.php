<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'home']);
Route::get('/clinic', [SiteController::class, 'clinic']);
Route::get('/appointment', [SiteController::class, 'appointment']);
Route::get('/contact', [SiteController::class, 'contact']);

// admin section

Route::get('/admin', [SiteController::class, 'admin'])->middleware('AdminAuth');

// login and reg
Route::get('/login', [SiteController::class, 'Login']);
Route::get('/reg', [SiteController::class, 'Registation']);
Route::post('/admin-registaion', [SiteController::class, 'admin_registaion']);
Route::post('/admin-login', [SiteController::class, 'admin_login']);
Route::post('/logout', [SiteController::class, 'logout']);
Route::post('/add-apppointment', [SiteController::class, 'add_apppointment']);
Route::get('/remove-appointment', [SiteController::class, 'remove_appointment']);
