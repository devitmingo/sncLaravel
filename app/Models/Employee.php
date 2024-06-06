<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 'name', 'fatherName', 'motherName', 'gender', 'mobile', 'email', 'dob', 'desiganation', 'image', 'address', 'status', 'createdby', 'created_at', 'updated_at'
    ];
}
