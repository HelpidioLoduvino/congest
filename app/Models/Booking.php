<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    public $table = 'bookings';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'condo_id',
        'subject',
        'meeting',
        'booking_date'
    ];
}
