<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('users', \App\Http\Controllers\UserController::class);

Route::post('logout', function(Request $request) {
    auth()->logout();
    return redirect('/');
})->name('logout');
