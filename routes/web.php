<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('home');
Route::get('/services', fn() => view('services'))->name('services');
Route::get('/case-study', fn() => view('case-study'))->name('case-study');
Route::get('/blog', fn() => view('blog'))->name('blog');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/about', fn() => view('about'))->name('about');

Route::get('/services/web-development', fn() => view('services.show', ['slug' => 'web-development']))->name('service.web-development');
Route::get('/services/consulting', fn() => view('services.show', ['slug' => 'consulting']))->name('service.consulting');
Route::get('/services/cyber-security', fn() => view('services.show', ['slug' => 'cyber-security']))->name('service.cyber-security');
