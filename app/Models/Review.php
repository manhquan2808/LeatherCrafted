<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'rating', 'comment'];

    // Một đánh giá thuộc về một user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Một đánh giá thuộc về một sản phẩm
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
// ✅ Tóm tắt các mối quan hệ
// User ↔ có nhiều ↔ Order
// User ↔ có nhiều ↔ Review
// Category ↔ có nhiều ↔ Product
// Product ↔ có nhiều ↔ Review
// Product ↔ có nhiều ↔ OrderDetail
// Order ↔ có nhiều ↔ OrderDetail
// OrderDetail ↔ thuộc về ↔ Order
// OrderDetail ↔ thuộc về ↔ Product