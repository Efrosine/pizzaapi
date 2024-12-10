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
                'image_url' => 'https://images.eatsmarter.com/sites/default/files/styles/max_size/public/italian-classic-pizza-463965.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pepperoni Pizza',
                'price' => 95000,
                'category_id' => 1,
                'description' => 'Pizza topped with spicy pepperoni slices and melted mozzarella.',
                'image_url' => 'https://images.deliveryhero.io/image/talabat/MenuItems/blob_637690471627697138',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Veggie Pizza',
                'price' => 85000,
                'category_id' => 1,
                'description' => 'Loaded with fresh vegetables, including bell peppers, onions, and olives.',
                'image_url' => 'https://th.bing.com/th/id/OIP.67wECYAzCo79-vOfsb0fcQHaE7?pid=ImgDet&w=474&h=315&rs=1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hawaiian Pizza',
                'price' => 90000,
                'category_id' => 1,
                'description' => 'Sweet and savory pizza topped with pineapple and ham.',
                'image_url' => 'https://magazin.klarstein.cz/wp-content/uploads/2023/02/KS_Magazine_0223_Pizza-Hawaii_1300x1300px.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Coca Cola',
                'price' => 15000,
                'category_id' => 2,
                'description' => 'Classic refreshing soft drink.',
                'image_url' => 'https://dl2jx7zfbtwvr.cloudfront.net/product_largeimages/soft7010_1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Orange Juice',
                'price' => 20000,
                'category_id' => 2,
                'description' => 'Freshly squeezed orange juice.',
                'image_url' => 'https://th.bing.com/th/id/OIP.K9ROdDn4x6yZU707UpGCSQHaHh?rs=1&pid=ImgDetMain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Garlic Bread',
                'price' => 30000,
                'category_id' => 3,
                'description' => 'Toasted bread with garlic butter and herbs.',
                'image_url' => 'https://th.bing.com/th/id/R.a3a37cc92c49ac6d04c8bcae46531325?rik=CWKmHEIXqokXkg&riu=http%3a%2f%2ffarm6.staticflickr.com%2f5523%2f11955439695_8ebc90349b_h.jpg&ehk=ToXjlKtPKHQTbnHyvedSHA1W%2byZ5loaGeujkLxxAd1M%3d&risl=&pid=ImgRaw&r=0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chicken Wings',
                'price' => 40000,
                'category_id' => 3,
                'description' => 'Crispy chicken wings served with dipping sauce.',
                'image_url' => 'https://th.bing.com/th/id/OIP.Rq617kDxKXVZtblhM66DJAHaEK?rs=1&pid=ImgDetMain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mango Smoothie',
                'price' => 25000,
                'category_id' => 2,
                'description' => 'Creamy smoothie made with fresh mangoes.',
                'image_url' => 'https://th.bing.com/th/id/OIP.N8SK3u92b6SxeD6MKpmHSwHaLH?w=195&h=292&c=7&r=0&o=5&pid=1.7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BBQ Pizza',
                'price' => 100000,
                'category_id' => 1,
                'description' => 'Pizza with BBQ sauce, grilled chicken, and onions.',
                'image_url' => 'https://th.bing.com/th/id/OIP.aR4pEyVtoeLxNYt0PI0kXgHaLJ?w=195&h=294&c=7&r=0&o=5&pid=1.7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
