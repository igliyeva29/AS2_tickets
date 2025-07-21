<?php

namespace App\Models;

use App\Models\Passenger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seat extends Model
{
    /** @use HasFactory<\Database\Factories\SeatFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'seat_number',
        'seat_type',
        'is_available',
    ];

    public function passenger()
    {
        return $this->belongsTo(Passenger::class);
    }
}
