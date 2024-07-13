<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name', 'phone', 'email', 'address', 'order_id',
        'total', 'quantity', 'status', 'payment', 'delivery_type', 'zip_code', 'total_cart', 'shipping_price'
    ];

    use HasFactory;
}
