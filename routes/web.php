<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name("home");
    Route::get('/blog', 'blog')->name("blog");
    Route::get('/about', 'about')->name("about");
    Route::get('/contact', 'contact')->name("contact");
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/signin', 'signin')->name('login');
    Route::get('/signup', 'signup')->name('register');

    Route::post('/signin', 'signinPost')->name('signin');
    Route::post('/signup', 'signupPost')->name('signup');

    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(ArticleController::class)->group(function () {
    Route::get("/posts/{article:slug}", "show")->name('posts.show');
});

Route::controller(CommentController::class)->prefix('/comments')->group(function () {
    Route::post('/create', 'store')->name('comments.create');
});
