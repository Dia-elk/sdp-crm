<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



// Login Route

Route::resource('login',LoginController::class);
Route::delete('/logout', [LoginController::class, 'destroy']);

// Routes that only for admin

Route::middleware('auth')->group(function (){
    Route::get('/dashboard', function (){
        return Inertia::render('Welcome');
    })->name('dashboard');
});
