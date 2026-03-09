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
Route::get('/services/e-commerce', fn() => view('services.show', ['slug' => 'e-commerce']))->name('service.e-commerce');
Route::get('/services/data-analytics', fn() => view('services.show', ['slug' => 'data-analytics']))->name('service.data-analytics');
Route::get('/services/cloud-services', fn() => view('services.show', ['slug' => 'cloud-services']))->name('service.cloud-services');
Route::get('/services/software-development', fn() => view('services.show', ['slug' => 'software-development']))->name('service.software-development');
Route::get('/services/ui-ux-design', fn() => view('services.show', ['slug' => 'ui-ux-design']))->name('service.ui-ux-design');
Route::get('/services/graphic-design', fn() => view('services.show', ['slug' => 'graphic-design']))->name('service.graphic-design');
