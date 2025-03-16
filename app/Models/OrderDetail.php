<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'product_id', 'quantity', 'price'];

    // Chi tiết đơn hàng thuộc một đơn hàng
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Chi tiết đơn hàng thuộc một sản phẩm
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
