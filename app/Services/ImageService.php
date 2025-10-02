<?php

namespace App\Services;

class ImageService
{
    /**
     * Convert image file to base64 data URL
     */
    public static function convertToBase64($imagePath, $storagePath = 'app/public/')
    {
        $fullPath = storage_path($storagePath . $imagePath);
        
        if (!file_exists($fullPath)) {
            return null;
        }
        
        $imageData = file_get_contents($fullPath);
        $mimeType = mime_content_type($fullPath);
        
        return 'data:' . $mimeType . ';base64,' . base64_encode($imageData);
    }
    
    /**
     * Convert uploaded file to base64 data URL
     */
    public static function convertUploadedFileToBase64($uploadedFile)
    {
        if (!$uploadedFile || !$uploadedFile->isValid()) {
            return null;
        }
        
        $imageData = file_get_contents($uploadedFile->getRealPath());
        $mimeType = $uploadedFile->getMimeType();
        
        return 'data:' . $mimeType . ';base64,' . base64_encode($imageData);
    }
    
    /**
     * Convert base64 data URL to file and save
     */
    public static function saveBase64ToFile($base64Data, $filename, $storagePath = 'app/public/')
    {
        if (!$base64Data) {
            return null;
        }
        
        // Extract the base64 data and mime type
        if (preg_match('/^data:([^;]+);base64,(.+)$/', $base64Data, $matches)) {
            $mimeType = $matches[1];
            $imageData = base64_decode($matches[2]);
            
            // Determine file extension from mime type
            $extension = self::getExtensionFromMimeType($mimeType);
            $fullFilename = $filename . '.' . $extension;
            
            $fullPath = storage_path($storagePath . $fullFilename);
            
            // Ensure directory exists
            $directory = dirname($fullPath);
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            
            // Save the file
            if (file_put_contents($fullPath, $imageData)) {
                return $fullFilename;
            }
        }
        
        return null;
    }
    
    /**
     * Get file extension from mime type
     */
    private static function getExtensionFromMimeType($mimeType)
    {
        $mimeToExtension = [
            'image/jpeg' => 'jpg',
            'image/jpg' => 'jpg',
            'image/png' => 'png',
            'image/gif' => 'gif',
            'image/webp' => 'webp',
            'image/svg+xml' => 'svg',
        ];
        
        return $mimeToExtension[$mimeType] ?? 'jpg';
    }
}
