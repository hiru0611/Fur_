<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class ProductImage extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = ['product_id', 'image_path', 'base64_image'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', '_id'); 
    }

    /**
     * Get the image as base64 data URL
     */
    public function getBase64ImageAttribute($value)
    {
        if ($value) {
            return $value;
        }
        
        // If no base64 image but has image_path, convert it
        if ($this->image_path && file_exists(storage_path('app/public/' . $this->image_path))) {
            $imageData = file_get_contents(storage_path('app/public/' . $this->image_path));
            $mimeType = mime_content_type(storage_path('app/public/' . $this->image_path));
            return 'data:' . $mimeType . ';base64,' . base64_encode($imageData);
        }
        
        return null;
    }

    /**
     * Set the base64 image attribute
     */
    public function setBase64ImageAttribute($value)
    {
        $this->attributes['base64_image'] = $value;
    }
}
