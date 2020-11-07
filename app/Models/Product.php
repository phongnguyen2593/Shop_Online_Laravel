<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Category;

class Product extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'quantity',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
