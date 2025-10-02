<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = [
        'name',
        'price',
        'rating',
        'description',
        'category_id',
    ];

    // <-- ADD THIS CAST
    protected $casts = [
        'rating' => 'integer',
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
