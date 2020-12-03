<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class Sale extends Model
{
    use Notifiable, 
        SoftDeletes;

    protected $table = 'sales';

    protected $fillable = [
        'origin_price', 'sale_price', 'discount_percent'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
