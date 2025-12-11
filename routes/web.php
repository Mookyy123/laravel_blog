<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
 return 'Article List';
});
Route::get('/articles/detail', function () {
 return 'Article Detail';
});

// Dynamic Route
Route::get('/articles/detail/{id}', function ( $id ) {
 return "Article Detail - $id";
});

// Route Names
Route::get('/articles/detail', function () {
 return 'Article Detail';
})->name('article.detail');

Route::get('/articles/more', function() {
 return redirect('/articles/detail');
});

Route::get('/articles/more', function() {
 return redirect()->route('article.detail');
});
