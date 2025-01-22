<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubscriptionPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'anual_cost',
        'garage_slots',
        'shop_discount',
        'service_discount',
        
    ];

    public function Subscription()
    {
        return $this->hasMany(Subscription::class);
    }


}
