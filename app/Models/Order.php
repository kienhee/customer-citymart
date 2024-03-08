<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name', 'phone', 'email', 'address', 'order_id',
        'total', 'quantity', 'status', 'payment', 'delivery_type'
    ];

    use HasFactory;
}
