<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalContract extends Model
{
    use HasFactory;
    public $table = 'personal_contracts';
    public $timestamps = false;
    protected $fillable = ['userId', 'bi', 'birthday', 'gender', 'nationality', 'address', 'contact'];
}
