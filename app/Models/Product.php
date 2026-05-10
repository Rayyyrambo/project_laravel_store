<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Fillable;
// #[Fillable(['category_id', 'name', 'price', 'stock', 'image', 'description', 'is_available'])]

class Product extends Model
{
    protected $fillable = [
        'category_id', 'name', 'price', 'stock', 'image', 'description', 'is_available' // Tambahkan ini
    ];
     public function category(){
        return $this->belongsTo(Category::class);
    }
}
