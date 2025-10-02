<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        'order_id',
        'product_id',
        'qty',
        'unit_price',
        'line_total',
    ];

    // Relationships
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
