<?php

namespace App\Models;

use App\Models\Fare;
use App\Models\Ticket;
use App\Models\Airline;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flight extends Model
{
    /** @use HasFactory<\Database\Factories\FlightFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'airline_id',
        'from_city',
        'to_city',
        'departure_time',
        'arrival_time',
        'duration_time',
    ];

    protected $casts = [
        'departure_time' => 'datetime',
        'arrival_time' => 'datetime',
    ];

    public function fares(): HasMany
    {
        return $this->hasMany(Fare::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

   public function airline()
    {
        return $this->belongsTo(Airline::class);
    }
}
