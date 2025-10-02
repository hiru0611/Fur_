<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class ProductImage extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = ['product_id', 'image_path'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', '_id');
    }
}
