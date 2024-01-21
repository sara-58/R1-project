<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ListingController;
use App\Models\Testimonial;

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

Route::get('index', [MainController::class ,'index']) ->name('index');
Route::get('about', [MainController::class, 'about'])->name('about');

Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials');

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('sendEmail', [ContactController::class, 'send'])->name('sendEmail');

Route::get('listing', [ListingController::class, 'index'])->name('listing');
Route::get('blog', [ListingController::class, 'blog'])->name('blog');
Route::get('single', [ListingController::class, 'single'])->name('single');

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
