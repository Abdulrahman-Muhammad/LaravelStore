<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSizeColor extends Model
{
    use HasFactory;
    protected $fillable = ['product_size_id', 'product_color_id', 'quantity' , 'price_two' , 'discount' , 'status'];
    protected $table = 'product_size_color';


    public function productsize()
    {
        return $this->belongsTo(ProductSize::class);
    }

    public function productcolor()
    {
        return $this->belongsTo(ProductColor::class);
    }
}
