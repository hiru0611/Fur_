<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Dog',
                'slug' => 'dog',
                'description' => 'Products for dogs'
            ],
            [
                'name' => 'Cat',
                'slug' => 'cat',
                'description' => 'Products for cats'
            ],
            [
                'name' => 'Fish',
                'slug' => 'fish',
                'description' => 'Products for fish'
            ],
            [
                'name' => 'Rabbit',
                'slug' => 'rabbit',
                'description' => 'Products for rabbits'
            ],
        ];

        foreach ($categories as $categoryData) {
            Category::firstOrCreate(
                ['slug' => $categoryData['slug']],
                $categoryData
            );
        }
    }
}
