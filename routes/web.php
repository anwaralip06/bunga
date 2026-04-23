<?php
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'dashboard'])->name('/');;
Route::get('register', [FormController::class, 'register'])->name('register');
Route::post('welcome', [HomeController::class, 'welcome'])->name('welcome');

Route::get('saya', function () {
    echo "Hello";
});

