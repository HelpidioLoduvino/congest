<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableCondo extends Model
{
    use HasFactory;
    public $table = 'available_condos';
    public $timestamps = false;
    protected $fillable = ['condoId', 'userId', 'available', 'occupied'];
}
