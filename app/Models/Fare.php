<?php

namespace App\Models;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'available_seets',
    ];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
