<?php

namespace App\Models;

use App\Models\Passenger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'booking_id',
        'passenger_id',
        'flight_id',
        'fare_id',
        'seat_number',
        'date',
    ];

    public function passenger()
    {
        return $this->belongsTo(Passenger::class);
    }
}
