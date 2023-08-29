<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'apartment_id',
        'street',
        'city',
        'zip',
        'latitude',
        'longitude',
    ];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
    
}
