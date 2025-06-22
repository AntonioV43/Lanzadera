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
    return view('frontend.index.welcome');
});

Route::get('/categories', function () {
    return view('frontend.index.categories');
});

// Rute yang membutuhkan login
Route::middleware(['auth'])->group(function () {
    Route::get('/favourite', function () {
        return view('frontend.profile.favourite');
    });

    Route::get('/my_order', function () {
        return view('frontend.profile.my_order');
    });

    Route::get('/profile', function () {
        return view('frontend.profile.profile');
    });

    Route::get('/edit_profile', function () {
        return view('frontend.profile.edit');
    });

    Route::get('/history', function () {
        return view('frontend.profile.history');
    });

    Route::get('/booking', function () {
        return view('frontend.index.booking');
    });

    Route::get('/payment', function () {
        return view('frontend.index.payment');
    });
});

Route::get('/booking/{destination:name}', [\App\Http\Controllers\BookingController::class, 'show'])->name('destination.show');

Route::get('/categories', [App\Http\Controllers\Admin\CategoriesController::class, 'index']);

Auth::routes();

// Rute admin
Route::group(['middleware' => 'isAdmin','prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('destinations', \App\Http\Controllers\Admin\DestinationController::class);
});