<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;


Route::get('/', [PageController::class, 'index'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/deliver', [PageController::class, 'deliver'])->name('deliver');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::resources([
    'products' => ProductController::class
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
