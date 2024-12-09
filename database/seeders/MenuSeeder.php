<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('menus')->insert([
            [
                'name' => 'Margherita Pizza',
                'price' => 80000,
                'category_id' => 1,
                'description' => 'Classic Italian pizza with fresh tomatoes, mozzarella, and basil.',
                'image_url' => 'https://example.com/images/margherita.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pepperoni Pizza',
                'price' => 95000,
                'category_id' => 1,
                'description' => 'Pizza topped with spicy pepperoni slices and melted mozzarella.',
                'image_url' => 'https://example.com/images/pepperoni.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Veggie Pizza',
                'price' => 85000,
                'category_id' => 1,
                'description' => 'Loaded with fresh vegetables, including bell peppers, onions, and olives.',
                'image_url' => 'https://example.com/images/veggie.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hawaiian Pizza',
                'price' => 90000,
                'category_id' => 1,
                'description' => 'Sweet and savory pizza topped with pineapple and ham.',
                'image_url' => 'https://example.com/images/hawaiian.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Coca Cola',
                'price' => 15000,
                'category_id' => 2,
                'description' => 'Classic refreshing soft drink.',
                'image_url' => 'https://example.com/images/cocacola.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Orange Juice',
                'price' => 20000,
                'category_id' => 2,
                'description' => 'Freshly squeezed orange juice.',
                'image_url' => 'https://example.com/images/orangejuice.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Garlic Bread',
                'price' => 30000,
                'category_id' => 3,
                'description' => 'Toasted bread with garlic butter and herbs.',
                'image_url' => 'https://example.com/images/garlicbread.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chicken Wings',
                'price' => 40000,
                'category_id' => 3,
                'description' => 'Crispy chicken wings served with dipping sauce.',
                'image_url' => 'https://example.com/images/chickenwings.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mango Smoothie',
                'price' => 25000,
                'category_id' => 2,
                'description' => 'Creamy smoothie made with fresh mangoes.',
                'image_url' => 'https://example.com/images/mangosmoothie.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BBQ Pizza',
                'price' => 100000,
                'category_id' => 1,
                'description' => 'Pizza with BBQ sauce, grilled chicken, and onions.',
                'image_url' => 'https://example.com/images/bbqpizza.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
