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

    Route::get('/clients', function (){
        return Inertia::render('Clients/Index');
    })->name('clients');

    Route::get('/orders', function (){
        return Inertia::render('Orders/Index');
    })->name('orders');

    Route::get('/products', function (){
        return Inertia::render('Products/Index');
    })->name('products');

    Route::get('/files', function (){
        return Inertia::render('Files/Index');
    })->name('files');

    Route::get('/reports', function (){
        return Inertia::render('Reports/Index');
    })->name('reports');

    Route::get('/team', function (){
        return Inertia::render('Team/Index');
    })->name('team');

    Route::get('/settings', function (){
        return Inertia::render('Settings/Index');
    })->name('settings');

});
