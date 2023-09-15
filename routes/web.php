<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::namespace('App\Http\Controllers')->group(function () {
        Route::resource('bookings', BookingController::class);
    });
});
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post', [App\Http\Controllers\WebsiteController::class, 'feed'])->name('feed');
Route::get('/create-feed', [App\Http\Controllers\WebsiteController::class, 'createFeed'])->name('create-feed');
Route::post('/store-feed', [App\Http\Controllers\WebsiteController::class, 'createF'])->name('store-feed');
Route::post('/store', [App\Http\Controllers\WebsiteController::class, 'store'])->name('store');
Route::get('/add', [App\Http\Controllers\WebsiteController::class, 'add'])->name('add');
Route::get('/create', [App\Http\Controllers\WebsiteController::class, 'create'])->name('create');

Route::namespace('App\Http\Controllers')->group(function () {
    Route::post('/search', 'HomeController@messSearch')->name('mess.search');
    Route::get('/details/{id}', 'HomeController@messDetails')->name('mess_details');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/profile/{id}', 'HomeController@profile')->name('profile');
        Route::post('/profile/update', 'HomeController@profileUpdate')->name('profile.update');
        Route::get('/booking/{id}', 'BookingController@bookingMess')->name('booking');
        Route::get('/confirm-cancel-booking/{id}', 'BookingController@confirmAndCancelMess')->name('booking');
        Route::post('review-store', 'ReviewRatingController@store')->name('review.store');
        Route::resource('meals', MealController::class);
    });
});
