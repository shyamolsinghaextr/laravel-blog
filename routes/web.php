<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\blog_controller;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\SettingController;

Route::get('/', [blog_controller::class, 'home_view'])->name('home');
Route::get('articles', [blog_controller::class, 'articles_view'])->name('articles');
Route::get('about', [blog_controller::class, 'about_view'])->name('about');
Route::get('contact', [blog_controller::class, 'contact_view'])->name('contact');


Route::get('dashboard', [BlogPostController::class, 'dashboard'])->name('dashboard');
Route::get('create-post', [BlogPostController::class, 'create_post'])->name('create_post');
Route::get('delete-post', [BlogPostController::class, 'delete_post'])->name('delete_post');
Route::get('edit-post', [BlogPostController::class, 'edit_post'])->name('edit_post');
Route::get('view-post', [BlogPostController::class, 'view_post'])->name('view_post');

Route::get('settings', [SettingController::class, 'settings'])->name('settings');

Route::get('category-list', [SettingController::class, 'category_list'])->name('category_list');


