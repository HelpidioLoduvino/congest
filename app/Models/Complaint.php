<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    public $table = 'complaints';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'condo_id',
        'subject',
        'complaint',
    ];
}
