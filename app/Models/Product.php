<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'price', 'discount_price', 'category_id', 'status'];
    protected $table = 'products';


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function productsizecolor()
    {
        return $this->hasMany(ProductSizeColor::class);
    }

    public function productsize()
    {
        return $this->hasMany(ProductSize::class);
    }

    public function productcolor()
    {
        return $this->hasMany(ProductColor::class);
    }
}
