<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_airport_id', 'end_airport_id', 'price', 'time_in_minutes', 'distance'
    ];

    public function startAirport()
    {
        return $this->belongsTo(Airport::class, 'start_airport_id');
    }

    public function endAirport()
    {
        return $this->belongsTo(Airport::class, 'end_airport_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}

