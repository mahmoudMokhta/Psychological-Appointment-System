<?php

use App\Http\Controllers\AppointmentController;
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



Route::get('/admin', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware(['auth', 'role:admin'])->group(function () {
// });

Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::resource('user', UserController::class);
    Route::get('/search', [UserController::class, 'search'])->name('user.search');
});


Route::middleware(['auth', 'checkRole:admin,doctor'])->group(function () {

    Route::resource('appointment', AppointmentController::class)->middleware('auth');
    Route::get('/reserve-appointment/{appointment}', [AppointmentController::class, 'reserveAppointment'])->name('appointments.reserve');
    Route::put('/appointments/{id}/update-status', [AppointmentController::class, 'updateStatus'])->name('appointment.updateStatus');
});

Route::resource('message', MessageController::class);


Route::get('/profile/{user}', [ProfileController::class, 'index'])->middleware('auth')->name('profile.index');





require __DIR__ . '/auth.php';
