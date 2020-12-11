<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Order;
class Customer extends Model
{
    use Notifiable; 

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
