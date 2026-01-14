<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/articles/create', [ArticleController::class, 'create'])
    ->name('articles.create');

Route::post('/articles', [ArticleController::class, 'store'])
    ->name('articles.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function () {
    return 'Admin Page - Only admin can access';
})->middleware('check.email');

Route::get('/test', function () {
    return ' Admin can see this even in maintenance';
})->middleware('maintenance');



require __DIR__.'/auth.php';
