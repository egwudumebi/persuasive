<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ReviewController;
use Illuminate\Contracts\Auth\Guard;

Route::get('/', [LandingController::class, 'index'])->name('index');
Route::get('/doctors/{doctor}', [LandingController::class, 'doctorDetails'])->name('doctor.details');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::get('/register/doctor', [AuthController::class, 'showDoctorRegister'])->name('doctor.register');
Route::get('login', [AuthController::class, 'showLogin'])->name('login')->middleware(['guest']);
Route::post('/register', [AuthController::class, 'createPatient']);
Route::post('/register/doctor', [AuthController::class, 'createDoctor']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard/doctor/logout', [AuthController::class, 'docLogout'])->name('doctor.logout');
Route::get('/mail/welcome', [AuthController::class, 'sendMail']);


Route::middleware(['auth:web'])->group(function () {
    Route::get('/dashboard', [PatientController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/profile', [PatientController::class, 'showProfileEdit'])->name('edit');
    Route::post('/dashboard/profile', [PatientController::class, 'edit']);
    Route::get('/dashboard/searchDoctor', [PatientController::class, 'showSearchDoctor'])->name('showSearch');
    Route::get('/dashboard/view-doctor/{id}', [PatientController::class, 'viewDoctor'])->name('view-doctor');
    Route::post('/dashboard/view-doctor/review', [ReviewController::class, 'createReview']);
});

Route::middleware(['auth:web'])->group(function () {
    Route::post('/reviews/{review_id}/like', [ReviewController::class, 'like'])->name('reviews.like');
    Route::post('/reviews/{review_id}/dislike', [ReviewController::class, 'dislike'])->name('reviews.dislike');
    // Route::get('reviews/delete/{review_id}', [ReviewController::class, 'destroy']);
    Route::get('/{model}/{review_id}', [ReviewController::class, 'delete']);
    Route::put('/{model}/edit/{review_id}', [ReviewController::class, 'edit']);
});


Route::middleware(['auth:docs'])->group(function () {
    Route::get('/dashboard/doctor', [DoctorController::class, 'index'])->name('dashboard.doctor.index');
});
