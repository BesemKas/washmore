<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{

    use HasFactory;
    protected $fillable = [
        'payment_type_id',
        'user_id',
        'payable_id',
        'status',
        'date_created',
        'amount',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }

    public function payable()
    {
        return $this->morphTo();
    }
}
