<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name("home");
    Route::get('/blog', 'blog')->name("blog");
    Route::get('/about', 'about')->name("about");
    Route::get('/contact', 'contact')->name("contact");
    Route::get('/post', 'post')->name("post");

    Route::get('/signin', 'signin')->name('login');
    Route::get('/signup', 'signup')->name('register');
});
