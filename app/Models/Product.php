<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Category;
use App\Models\Image;
use App\Models\Sale;
use App\Models\User;

class Product extends Model
{
    use Notifiable;

    protected $table = "products";

    protected $fillable = [
        'name', 'quantity', 'status'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function sale()
    {
        return $this->hasOne(Sale::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
