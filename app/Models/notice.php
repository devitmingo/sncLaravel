<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notice extends Model
{
    use HasFactory;
    protected $fillable = [
        'notice_id', 'name', 'subject', 'description', 'status','created_at', 'updated_at'
    ];
}
