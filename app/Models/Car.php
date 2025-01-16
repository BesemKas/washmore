<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use NunoMaduro\Collision\Adapters\Phpunit\Subscribers\Subscriber;

class Car extends Model
{

    use HasFactory;
    protected $fillable = ['subscription_id','brand', 'model', 'color', 'reg_number', 'date_added'];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
