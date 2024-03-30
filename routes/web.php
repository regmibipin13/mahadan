<?php

use App\Http\Controllers\Admin\EventsController as AdminEventsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\Frontend\PagesController;
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

Route::group(['as' => 'frontend.'], function () {
    Route::get('/', [PagesController::class, 'home'])->name('home');
    Route::get('/about', [PagesController::class, 'about'])->name('about');
    Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
    Route::get('/events', [PagesController::class, 'events'])->name('events');
    Route::get('/events/{event}', [PagesController::class, 'event'])->name('event');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/home', [App\Http\Controllers\HomeController::class, 'guest'])->name('guest');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin']], function () {
    Route::resource('users', UsersController::class);
    Route::resource('categories', CategoriesController::class);

    Route::patch('events/{event}/status', [AdminEventsController::class, 'approve'])->name('events.approve');
    Route::resource('events', AdminEventsController::class);
});

Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => 'auth'], function () {
    Route::resource('events', EventsController::class);
});
