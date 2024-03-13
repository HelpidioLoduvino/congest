<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageFeedback extends Model
{
    use HasFactory;
    public $table = 'message_feedback';
    public $timestamps = false;
    protected $fillable = ['resident_id', 'condo_id', 'feedback'];
}
