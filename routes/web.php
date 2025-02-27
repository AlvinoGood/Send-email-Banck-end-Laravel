<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/reservations', [ReservationController::class, 'store']);