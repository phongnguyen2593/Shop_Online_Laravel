<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Product;

class Image extends Model
{
    use Notifiable;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
