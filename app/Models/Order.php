<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use Notifiable, 
        SoftDeletes;

    protected $fillable = [
        'status'
    ];

    protected $table = 'orders';
}
