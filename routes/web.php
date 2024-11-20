<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('home');
});



Route::get('/signup', [RegistrationController::class, 'showSignupForm'])->name('auth');
Route::post('/signup', [RegistrationController::class, 'signup'])->name('signup');

Route::get('/login', [RegistrationController::class, 'showLoginForm'])->name('auth');
Route::post('/login', [RegistrationController::class, 'login'])->name('login');

// Route::post('/logout', [RegistrationController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');
//route for contact us
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.show');
Route::post('/contact-us', [ContactController::class, 'submit'])->name('contact.submit');



Route::get('/cart',[CartController::class ,'index'])->name('cart.index');