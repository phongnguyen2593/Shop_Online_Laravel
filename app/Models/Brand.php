<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Product;

class Brand extends Model
{
    use Notifiable;
    
    protected $table = 'brands';

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
