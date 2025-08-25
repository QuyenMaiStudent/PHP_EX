<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', ['greeting' => 'Xin chào từ backend laravel']);
})->name('home');

Route::get('/calculator', function () {
    return Inertia::render('Calculator');
});

Route::get('/casino', function () {
    return Inertia::render('Casino');
});

Route::resource('contacts', ContactController::class);