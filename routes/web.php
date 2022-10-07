<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function() {

    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::resource('profile', \App\Http\Controllers\ProfileController::class);
    Route::resource('roles', \App\Http\Controllers\RoleController::class);

    Route::post('logout', function(Request $request) {
        auth()->logout();
        return redirect('/');
    })->name('logout');

});
