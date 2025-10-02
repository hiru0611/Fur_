<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'image',
        'base64_image',
        'author',
        'event_date',
        'category',
        'tags',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'event_date' => 'date',
        'tags' => 'array',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Get the image as base64 data URL
     */
    public function getBase64ImageAttribute($value)
    {
        if ($value) {
            return $value;
        }
        
        // If no base64 image but has image path, convert it
        if ($this->image && file_exists(storage_path('app/public/' . $this->image))) {
            $imageData = file_get_contents(storage_path('app/public/' . $this->image));
            $mimeType = mime_content_type(storage_path('app/public/' . $this->image));
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
