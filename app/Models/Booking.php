<?php

namespace App\Models;

use App\Models\Flight;
use App\Models\Ticket;
use App\Models\Airline;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'passenger_id',
        'flight_id',
    ];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

       public function airline()
    {
        return $this->belongsTo(Airline::class);
    }
       public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
