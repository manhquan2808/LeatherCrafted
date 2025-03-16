<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'total_price', 'status', 'shipping_address', 'payment_method'];

    // Một đơn hàng thuộc về một user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Một đơn hàng có nhiều sản phẩm (thông qua order details)
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
