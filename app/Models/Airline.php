<?php

namespace App\Models;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Airline extends Model
{
    /** @use HasFactory<\Database\Factories\AirlineFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'name',
        'flight_number',
    ];

    public function flights(): HasMany
    {
        return $this->hasMany(Flight::class);
    }
}
