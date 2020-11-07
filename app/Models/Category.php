<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Product;

class Category extends Model
{
    use Notifiable;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
