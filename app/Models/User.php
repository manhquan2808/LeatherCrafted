<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'address', 'phone', 'role'];

    protected $hidden = ['password', 'remember_token'];

    // Một user có nhiều đơn hàng
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // Một user có thể viết nhiều đánh giá
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
