<?php

use App\Http\Controllers\OuterController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', [OuterController::class, 'index']);

Route::controller(UsersController::class)->group(function () {
    Route::get('/login', 'login_form');
});
