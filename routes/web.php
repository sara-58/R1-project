<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;

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
Route::get('testimonial', [MainController::class, 'testi'])->name('testimonial');
Route::get('listing', [MainController::class, 'listing'])->name('listing');
Route::get('blog', [MainController::class, 'blog'])->name('blog');
Route::get('single', [MainController::class, 'single'])->name('single');

Route::get('contact', [ContactController::class, 'create'])->name('contact');
Route::post('sendEmail', [ContactController::class, 'send'])->name('sendEmail');

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['verified']], function () {

    Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials');
    Route::get('addTestimonial', [TestimonialController::class, 'create'])->name('addTestimonial');
    Route::post('storeTestimonial', [TestimonialController::class, 'store'])->name('storeTestimonial');
    Route::get('editTestimonial/{id}', [TestimonialController::class, 'edit'])->name('editTestimonial');
    Route::put('updateTestimonial/{id}', [TestimonialController::class, 'update'])->name('updateTestimonial');
    Route::get('deleteTestimonial/{id}', [TestimonialController::class, 'destroy'])->name('deleteTestimonial');

    Route::get('category', [CategoryController::class, 'index'])->name('category');
    Route::get('addCategory', [CategoryController::class, 'create'])->name('addCategory');
    Route::post('storeCategory', [CategoryController::class, 'store'])->name('storeCategory');
    Route::get('editCategory/{id}', [CategoryController::class, 'edit'])->name('editCategory');
    Route::put('updateCategory/{id}', [CategoryController::class, 'update'])->name('updateCategory');
    Route::get('deleteCategory/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory');

    Route::get('cars', [CarController::class, 'index'])->name('cars');
    Route::get('addCar', [CarController::class, 'create'])->name('addCar');
    Route::post('storeCar', [CarController::class, 'store'])->name('storeCar');
    Route::get('editCar/{id}', [CarController::class, 'edit'])->name('editCar');
    Route::put('updateCar/{id}', [CarController::class, 'update'])->name('updateCar');
    Route::get('deleteCar/{id}', [CarController::class, 'destroy'])->name('deleteCar');

    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::get('addUser', [UserController::class, 'create'])->name('addUser');
    Route::post('storeUser', [UserController::class, 'store'])->name('storeUser');
    Route::get('editUser/{id}', [UserController::class, 'edit'])->name('editUser');
    Route::put('updateUser/{id}', [UserController::class, 'update'])->name('updateUser');
    Route::get('deleteUser/{id}', [UserController::class, 'destroy'])->name('deleteUser');

    Route::get('messages', [ContactController::class, 'index'])->name('messages');
    Route::get('showMessage/{id}', [ContactController::class, 'show'])->name('showMessage');
    Route::get('deleteMessage/{id}', [ContactController::class, 'destroy'])->name('deleteMessage');


});

