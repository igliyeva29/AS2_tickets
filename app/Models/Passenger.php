<?php

namespace App\Models;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Passenger extends Model
{
    /** @use HasFactory<\Database\Factories\PassengerFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'passport_number',
        'date_of_birth',
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
