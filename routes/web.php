<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Home\HomeController;

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
Route::middleware([config('jetstream.auth_session'),])->group(function () {
    Route::get('/', [HomeController::class,'index'])->name('user.index');
});

Route::get('/verify-email', function () {
    return Inertia::render('Auth/VerifyEmail');
})->name('verification.notice');

Route::post('submit/answer',[HomeController::class,'storeAnswer'])->name('submit.answer');
