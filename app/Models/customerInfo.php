<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customerInfo extends Model
{
    protected $table='customer_info';

    protected $fillable=[
        'name',
        'customer_id',
         'email',
         'phone',
         'address',
         'due'
    ];
}
