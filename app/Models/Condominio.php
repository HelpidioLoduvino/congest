<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    use HasFactory;
    public $table = 'condominios';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'condo_name',
        'condo_address',
        'plot',
        'residency'
    ];
}
