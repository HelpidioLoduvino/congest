<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    public $table = 'informations';
    public $timestamps = false;
    protected $fillable = ['condo_id', 'user_id', 'subject', 'notice', 'date'];
}
