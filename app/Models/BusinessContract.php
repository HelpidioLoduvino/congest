<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessContract extends Model
{
    use HasFactory;
    public $table = 'business_contracts';
    public $timestamps = false;
    protected $fillable = ['userId', 'nif', 'address', 'contact'];
}
