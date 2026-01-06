<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ArticleController;
// use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;

Route::get('/user/{id}/posts', [UserController::class, 'showPosts']); // One-to-Many
Route::get('/post/{id}/user', [PostController::class, 'postedUser']); // BelongsTo
Route::get('/user/{id}/likes', [LikeController::class, 'showLikedPosts']); // Many-to-Many
Route::get('/post/{id}/likers', [LikeController::class, 'showPostLikers']); // Many-to-Many inverse
Route::get('/user/{id}/latest-comment', [UserController::class, 'showLatestComment']); // HasOneThrough
Route::get('/user/{id}/comments', [UserController::class, 'showUserComments']); // HasManyThrough






// Route::get('/user-profile', [UserController::class, 'index']);
// Route::get('/profile-user', [ProfileController::class, 'index']);

// use App\Http\Controllers\Book\BookController;

// Route::get('/books', [BookController::class, 'index'])->name('books.index');
// Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
// Route::post('/books', [BookController::class, 'store'])->name('books.store');
// Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
// Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
// Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');



// Route::get('/books', [BookController::class, 'index']);


// Route::get('/articles', [ArticleController::class, 'index']);
// Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/articles', function () {
//  return 'Article List';
// });
// Route::get('/articles/detail', function () {
//  return 'Article Detail';
// });

// // Dynamic Route
// Route::get('/articles/detail/{id}', function ( $id ) {
//  return "Article Detail - $id";
// });

// // Route Names
// Route::get('/articles/detail', function () {
//  return 'Article Detail';
// })->name('article.detail');

// Route::get('/articles/more', function() {
//  return redirect('/articles/detail');
// });

// Route::get('/articles/more', function() {
//  return redirect()->route('article.detail');
// });

// routes/web.php

// use App\Models\Article;

// Route::get('/test-dd', function () {
//     $articles= Article::all();
//     dd($articles);   // Dump and Die here
// });
