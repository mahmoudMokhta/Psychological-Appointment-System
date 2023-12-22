<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Clientside\ClientsideController;
use App\Http\Controllers\Clientside\LanguageController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Clientside Routes
Route::get('/',[ClientsideController::class,'index'])->name('home');;
Route::get('/doctors',[ClientsideController::class,'doctors'])->name('doctors');
Route::get('/doctors/booking/{name?}',[ClientsideController::class,'booking'])->name('booking');
Route::get('/contact',[ClientsideController::class,'contact'])->name('contact-us');
Route::get('/about',[ClientsideController::class,'about'])->name('about-us');
Route::get('/language/{lang}',[LanguageController::class,'index'])->name('language');;



require __DIR__ . '/auth.php';
