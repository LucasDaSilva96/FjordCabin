<?php

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

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
