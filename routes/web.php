<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('index');
})->name('home');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('listing', function () {
    return view('listing');
})->name('listing');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('single', function () {
    return view('single');
})->name('single');

// Route::get('/', 'HomeController@index')->name('home');
// Route::get('/listing', 'ListingController@index')->name('listing');
// Route::get('/testimonials', 'TestimonialsController@index')->name('testimonials');
// Route::get('/blog', 'BlogController@index')->name('blog');
// Route::get('/about', 'AboutController@index')->name('about');
// Route::get('/contact', 'ContactController@index')->name('contact');