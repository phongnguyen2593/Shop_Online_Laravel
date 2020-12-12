<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Product;
use App\Models\Customer;
use App\Models\User;

class Order extends Model
{
    use Notifiable;

    protected $fillable = [
        'status'
    ];

    protected $table = 'orders';

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['quantity', 'sale_price']);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function approver()
    {
        return $this->hasOne(User::class, 'id', 'approver_id');
    }
}
