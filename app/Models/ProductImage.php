<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'product_size_color_id', 'image'];
    protected $table = 'product_images';

    public function productsizecolor()
    {
        return $this->belongsTo(ProductSizeColor::class);
    }


}
