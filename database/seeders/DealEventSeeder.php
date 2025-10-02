<?php

namespace Database\Seeders;

use App\Models\Deal;
use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DealEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample deals
        Deal::create([
            'title' => 'Sunrise Veterinary Clinic',
            'description' => 'Professional veterinary care for your pets',
            'image' => 'deals/sample-deal-1.jpg',
            'discount' => '50% OFF',
            'distance' => '1 Mile away',
            'category' => 'Veterinary',
            'is_active' => true,
        ]);

        Deal::create([
            'title' => 'Adelle Veterinary Clinic',
            'description' => 'Complete pet healthcare services',
            'image' => 'deals/sample-deal-2.jpg',
            'discount' => '25% OFF',
            'distance' => '1.5 Miles away',
            'category' => 'Veterinary',
            'is_active' => true,
        ]);

        Deal::create([
            'title' => 'Pet Grooming Paradise',
            'description' => 'Professional pet grooming services',
            'image' => 'deals/sample-deal-3.jpg',
            'discount' => '30% OFF',
            'distance' => '2 Miles away',
            'category' => 'Grooming',
            'is_active' => true,
        ]);

        // Create sample events
        Event::create([
            'title' => 'How To Choose The Right Bully Stick For Your Dog',
            'excerpt' => 'Below is an excerpt of perchom\'s article "Moving With Pets? We have the perfect guide for you."',
            'content' => 'Full article content about choosing the right bully stick for your dog...',
            'image' => 'events/sample-event-1.jpg',
            'author' => 'Admin',
            'event_date' => now()->addDays(7),
            'category' => 'Educational',
            'tags' => ['Dog Care', 'Training', 'Health'],
            'is_active' => true,
        ]);

        Event::create([
            'title' => 'Saving Lives: Animal House Shelter And Downtown Pet Supply',
            'excerpt' => 'Below is an excerpt of perchom\'s article "Moving With Pets? We have the perfect guide for you."',
            'content' => 'Full article content about animal shelters and pet supply...',
            'image' => 'events/sample-event-2.jpg',
            'author' => 'Admin',
            'event_date' => now()->addDays(14),
            'category' => 'Charity',
            'tags' => ['Shelter', 'Adoption', 'Community'],
            'is_active' => true,
        ]);

        Event::create([
            'title' => 'Bully Sticks For Dogs: 7 Reasons They Are The Best Chew Treat',
            'excerpt' => 'Below is an excerpt of perchom\'s article "Moving With Pets? We have the perfect guide for you."',
            'content' => 'Full article content about bully sticks for dogs...',
            'image' => 'events/sample-event-3.jpg',
            'author' => 'Admin',
            'event_date' => now()->addDays(21),
            'category' => 'Nutrition',
            'tags' => ['Dog Treats', 'Nutrition', 'Health'],
            'is_active' => true,
        ]);
    }
}
