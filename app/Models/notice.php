<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notice extends Model
{
    use HasFactory;
    protected $fillable = [
        'notice_id', 'name','department', 'title', 'description', 'status','upload_date','from_date','to_date','file','created_at', 'updated_at'
    ];
}
