<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightController;

Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('flights', [FlightController::class, 'index'])->name('flights');