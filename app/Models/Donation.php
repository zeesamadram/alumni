<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'amount',
        'transaction_id',
        'payment_id',
        'remark',
        'cause',
        'user_level',
        'user_id',
    ];
}
