<?php

use App\Http\Controllers\LoginController;
use App\Models\Address;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// home
Route::get('/',function (){
    return Inertia::render('Website/Welcome' , [
        'user' => \App\Models\User::all()->where('is_admin',false)->first(),
        'admin' => \App\Models\User::all()->where('is_admin',true)->first(),
    ]);
});


// Auth
Route::resource('login',LoginController::class);
Route::delete('/logout', [LoginController::class, 'destroy']);


// Routes that only for admins
Route::middleware('auth')->group(function (){

    Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);

    Route::get('/clients', function (){
        return Inertia::render('Clients/Index');
    })->name('clients');

    Route::resource('orders' , \App\Http\Controllers\OrderController::class);

    Route::get('/products', function (){
        return Inertia::render('Products/Index');
    })->name('products');

    Route::get('/fees', function (){
        return Inertia::render('Fees/Index');
    })->name('fees');

    Route::get('/settings', function (){
        return Inertia::render('Settings/Index');
    })->name('settings');


    // Only Admins Routes
 Route::middleware('auth.admin')->group(function (){
     Route::get('/reports', function (){
         return Inertia::render('Reports/Index');
     })->name('reports');

     Route::get('/team', function (){
         return Inertia::render('Team/Index');
     })->name('team');
 });
});
