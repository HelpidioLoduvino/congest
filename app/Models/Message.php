<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    public $table = 'messages';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'condo_id',
        'message',
        'time',
        'date'
    ];
}
