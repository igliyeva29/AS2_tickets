<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FareController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightController;

Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('flights', [FlightController::class, 'index'])->name('flights');
Route::get('fares', [FareController::class, 'index'])->name('fares');
Route::get('seats', [SeatController::class, 'index'])->name('seats');
Route::get('bookings', [BookingController::class, 'index'])->name('bookings');
Route::get('passengers', [PassengerController::class, 'index'])->name('passengers');
Route::get('tickets', [TicketController::class, 'index'])->name('tickets');