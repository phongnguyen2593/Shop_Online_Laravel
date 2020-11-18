<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Product;

class Category extends Model
{
    use Notifiable;

    protected $table = 'categories';
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
