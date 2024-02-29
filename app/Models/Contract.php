<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    public $table = 'contracts';
    public $timestamps = false;
    protected $fillable = ['condo_id', 'user_id', 'contract_type', 'plan'];
}
