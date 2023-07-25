<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// home
Route::get('/',function (){
    return Inertia::render('Website/Welcome');
});


// Auth
Route::resource('login',LoginController::class);
Route::delete('/logout', [LoginController::class, 'destroy']);


// Routes that only for admins
Route::middleware('auth')->group(function (){
    Route::get('/dashboard', function (){
        return Inertia::render('Dashboard/Index');
    })->name('dashboard');
});
