<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'shop_order_id',
        'orderable_id',
        'quantity',
    ];

    public function shopOrder()
    {
        return $this->belongsTo(ShopOrder::class);
    }

    public function orderable()
    {
        return $this->morphTo();
    }

}
