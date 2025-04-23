<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'home']);

Route::post('/booking', [PageController::class, 'submitBooking'])->name('booking.submit');
