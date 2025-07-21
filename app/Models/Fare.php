<?php

namespace App\Models;

use App\Models\Flight;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fare extends Model
{
    /** @use HasFactory<\Database\Factories\FareFactory> */
    use HasFactory;


    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'flight_id',
        'class_name',
        'price',
        'currency',
        'available_seats',
    ];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

     public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
