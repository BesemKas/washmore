<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShopOrder extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'order_date',
        'status',
        'order_total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payments()
    {
        return $this->morphToMany(Payment::class, 'payable');
    }
}
