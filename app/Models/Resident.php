<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;
    public $table = 'residents';
    public $timestamps = false;
    protected $fillable = [
        'condo_id',
        'resident_id',
        'owner_id',
        'bi',
        'birthday',
        'gender',
        'nationality',
        'contact',
        'plot_resident',
        'residency_number'
    ];
}
