<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use App\Models\Image;
use App\Models\User;
use App\Models\Brand;

class Product extends Model
{
    use Notifiable, 
        SoftDeletes;

    protected $table = "products";

    protected $fillable = [
        'name', 'quantity', 'status', 'description'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
