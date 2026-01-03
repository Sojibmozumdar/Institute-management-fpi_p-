<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studentInfo extends Model
{
    protected $table='student_info';

    protected $fillable=[
        'student_name',
        'student_roll',
         'department',
         'semester',
         'shift',
         'cgpa',
         'phone',
         'email',
        'address',
         'image'
    ];
}
