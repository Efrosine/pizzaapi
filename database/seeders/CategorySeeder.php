<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Pizza', 'description' => 'Pizza Menu'],
            ['name' => 'Drink', 'description' => 'Drink Menu'],
            ['name' => 'Other', 'description' => 'Other Menu'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
