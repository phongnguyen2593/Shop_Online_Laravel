<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;
use App\Models\Category;
class Category extends Model
{
    use Notifiable, 
        SoftDeletes;

    protected $table = 'categories';
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }
}
