<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacherInfo extends Model
{

 protected $table='teachers';

   protected $fillable = [
    'name','email','technology','phone','job_title','picture'
];

}
