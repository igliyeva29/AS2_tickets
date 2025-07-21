<?php

use App\Http\Controllers\FareController;
use App\Http\Controllers\SeatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightController;

Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('flights', [FlightController::class, 'index'])->name('flights');
Route::get('fares', [FareController::class, 'index'])->name('fares');
Route::get('seats', [SeatController::class, 'index'])->name('seats');