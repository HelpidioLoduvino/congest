<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    public $table = 'meetings';
    public $timestamps = false;
    protected $fillable = ['condo_id', 'user_id', 'subject', 'place', 'meeting_date'];
}
