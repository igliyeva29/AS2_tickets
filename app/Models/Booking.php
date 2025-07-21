<?php

namespace App\Models;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
}
