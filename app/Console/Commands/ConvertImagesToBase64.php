<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ProductImage;
use App\Models\Deal;
use App\Models\Event;
use App\Services\ImageService;

class ConvertImagesToBase64 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'images:convert-to-base64 {--force : Force conversion even if base64_image already exists}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert existing images to base64 format and store in database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting image conversion to base64...');
        
        $force = $this->option('force');
        
        // Convert Product Images
        $this->convertProductImages($force);
        
        // Convert Deal Images
        $this->convertDealImages($force);
        
        // Convert Event Images
        $this->convertEventImages($force);
        
        $this->info('Image conversion completed!');
    }
    
    private function convertProductImages($force = false)
    {
        $this->info('Converting Product Images...');
        
        $query = ProductImage::whereNotNull('image_path');
        if (!$force) {
            $query->whereNull('base64_image');
        }
        
        $productImages = $query->get();
        $bar = $this->output->createProgressBar($productImages->count());
        
        foreach ($productImages as $image) {
            try {
                $base64Image = ImageService::convertToBase64($image->image_path);
                if ($base64Image) {
                    $image->base64_image = $base64Image;
                    $image->save();
                }
            } catch (\Exception $e) {
                $this->error("Failed to convert product image {$image->id}: " . $e->getMessage());
            }
            $bar->advance();
        }
        
        $bar->finish();
        $this->newLine();
        $this->info("Converted {$productImages->count()} product images.");
    }
    
    private function convertDealImages($force = false)
    {
        $this->info('Converting Deal Images...');
        
        $query = Deal::whereNotNull('image');
        if (!$force) {
            $query->whereNull('base64_image');
        }
        
        $deals = $query->get();
        $bar = $this->output->createProgressBar($deals->count());
        
        foreach ($deals as $deal) {
            try {
                $base64Image = ImageService::convertToBase64($deal->image);
                if ($base64Image) {
                    $deal->base64_image = $base64Image;
                    $deal->save();
                }
            } catch (\Exception $e) {
                $this->error("Failed to convert deal image {$deal->id}: " . $e->getMessage());
            }
            $bar->advance();
        }
        
        $bar->finish();
        $this->newLine();
        $this->info("Converted {$deals->count()} deal images.");
    }
    
    private function convertEventImages($force = false)
    {
        $this->info('Converting Event Images...');
        
        $query = Event::whereNotNull('image');
        if (!$force) {
            $query->whereNull('base64_image');
        }
        
        $events = $query->get();
        $bar = $this->output->createProgressBar($events->count());
        
        foreach ($events as $event) {
            try {
                $base64Image = ImageService::convertToBase64($event->image);
                if ($base64Image) {
                    $event->base64_image = $base64Image;
                    $event->save();
                }
            } catch (\Exception $e) {
                $this->error("Failed to convert event image {$event->id}: " . $e->getMessage());
            }
            $bar->advance();
        }
        
        $bar->finish();
        $this->newLine();
        $this->info("Converted {$events->count()} event images.");
    }
}
