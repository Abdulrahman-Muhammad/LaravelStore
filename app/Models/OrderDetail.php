<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'order_id' ,'product_size_color_id' , 'price' , 'quantity' , 'discount'];
    protected $table = 'order_details';


    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function productsizecolor()
    {
        return $this->belongsTo(ProductSizeColor::class);
    }
}
