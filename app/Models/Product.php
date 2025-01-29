<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'product_image',
        'product_category_id',
        'price',
        'SKU',
        'quantity_in_stock',
    ];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function orderItems()
    {
        return $this->morphToMany(OrderItem::class,'orderable');
    }

}
