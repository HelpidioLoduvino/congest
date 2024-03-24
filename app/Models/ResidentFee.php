<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentFee extends Model
{
    use HasFactory;

    public $table = 'resident_fees';

    public $timestamps = false;

    protected $fillable = [
        'condo_id',
        'resident_id',
        'bank_receipt',
        'month',
        'date',
    ];
}
