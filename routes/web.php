<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\blog_controller;

Route::get('/', [blog_controller::class, 'home_view'])->name('home');

Route::get('articles', [blog_controller::class, 'articles_view'])->name('articles');

Route::get('about', [blog_controller::class, 'about_view'])->name('about');

Route::get('contact', [blog_controller::class, 'contact_view'])->name('contact');