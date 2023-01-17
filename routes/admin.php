<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoomAmenitiesController;
use App\Http\Controllers\RoomPolicyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function (){
    Route::controller(LoginController::class)->group(function (){
        Route::get('login-form','showLoginForm')->name('login-Form');
        Route::post('login','login')->name('login');
        Route::post('logout','logout')->name('logout');
    });
    Route::get('', [ HomeController::class,'home' ])->name('home');
    Route::resource('/rooms', RoomController::class);
    Route::resource('/blog', PostController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/gallery', GalleryController::class);
    Route::resource('/testimonial', TestimonialController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/categories', PostCategoryController::class);
    Route::resource('/amenitie', RoomAmenitiesController::class);
    Route::resource('/policy', RoomPolicyController::class);
    // Route::get('/profile', [HomeController::class, 'profile'])->name('profile-page');
    // Route::put('/profile_update/{id}', [HomeController::class, 'update'])->name('update-profile-page');
    // Route::put('change-passwprd', [HomeController::class, 'validatepassword'])->name('change-password-page');
});
