<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'name', 'description', 'price', 'image_url', 'is_popular'
    ];

    public function product_category() {
        return $this->hasOne(ProductCategory::class, 'category_id', 'id');
    }
}
