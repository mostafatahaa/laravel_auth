<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;





Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [AuthenticationController::class, 'index'])->name('auth.login');
});
