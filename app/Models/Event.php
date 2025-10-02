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
}
