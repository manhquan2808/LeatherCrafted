<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'description', 'price', 'image', 'stock'];

    // Một sản phẩm thuộc một danh mục
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Một sản phẩm có nhiều đánh giá
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // Một sản phẩm có trong nhiều đơn hàng (chi tiết đơn hàng)
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
