<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $table = 'bookings';
    public $timestamps = false;
    protected $fillable = [
        'condo_id',
        'user_id',
        'place',
        'purpose',
        'booking_date'
    ];
}
