<?php

use App\Http\Controllers\Page\BookingController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about-page');
Route::get('/contact', [PageController::class, 'contact'])->name('contact-page');
Route::get('/galleries', [PageController::class, 'galleries'])->name('gallery-page');
Route::get('/room', [PageController::class, 'room'])->name('room-page');
Route::get('/blog', [PageController::class, 'blog'])->name('blog-page');
Route::get('/room-single/{room}', [PageController::class, 'roomdetails'])->name('room-details');
Route::get('/news-single/{post}', [PageController::class, 'blogdetails'])->name('post-details');
// Route::resource('/booking', BookingController::class);
Route::post('/booking', [BookingController::class, 'bookingform'])->name('booking-request');
Route::post('/contactform', [PageController::class, 'contactform'])->name('contact-request');
// Route::post('/pay', [BookingController::class, 'redirectToGateway'])->name('pay');
// Route::get('/payform', [BookingController::class, 'payform'])->name('payform');
// Route::get('/payment/callback', [BookingController::class, 'handleGatewayCallback']);