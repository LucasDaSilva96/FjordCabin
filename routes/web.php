<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CottageController;
use App\Models\Cottage;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [CottageController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/cottages/{id}', [CottageController::class, 'show'])->name('cottage');


Route::get('/bookings/create/{id}', [BookingController::class, 'create'])->name('bookings.create');

Route::get('/bookings/store/{id}', [BookingController::class, 'create_view'])->name('bookings.store');



Route::middleware(['guest'])->group(function(){
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    // MS Graph
    Route::get('/connect', [AuthenticatedSessionController::class, 'connect'])->name('connect');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);

});


Route::middleware(['auth'])->group(function(){

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/dashboard', fn()=> view('dashboard.index'))->name('dashboard');

    Route::post('/bookings/store', [BookingController::class, 'store'])->name('bookings.store_create');

});



require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
