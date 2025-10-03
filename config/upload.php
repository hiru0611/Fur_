<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Upload Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for file uploads in the application
    |
    */

    'max_file_size' => env('UPLOAD_MAX_FILE_SIZE', 10240), // 10MB in KB
    'allowed_mimes' => [
        'image/jpeg',
        'image/jpg', 
        'image/png',
        'image/gif',
        'image/webp'
    ],
    'max_files' => env('UPLOAD_MAX_FILES', 5),
    
    'paths' => [
        'products' => 'products',
        'deals' => 'deals', 
        'events' => 'events',
        'users' => 'users'
    ]
];
