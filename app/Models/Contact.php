<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model; // use MongoDB driver, not default Eloquent

class Contact extends Model
{
    protected $connection = 'mongodb'; // use MongoDB connection
    protected $collection = 'contacts'; // MongoDB collection name

    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
