<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('user', function () {
        return view('user');
    })->name("user");

    Route::get('admin', [AdminController::class, 'adminPage']);
});


if (file_exists(__DIR__ . '/auth.php')) {
    require __DIR__ . '/auth.php';
}

Route::get('exercise1', function () {
    return view('view1'); });
Route::get('introduction', function () {
    return view('introduction'); });