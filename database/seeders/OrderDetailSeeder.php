<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('order_details')->insert([
            [
                'order_id' => 1, // ID dari order pertama (pending)
                'menu_id' => 1, // ID dari menu 'Margherita Pizza'
                'quantity' => 1,
                'price' => 80000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1, // ID dari order pertama (pending)
                'menu_id' => 5, // ID dari menu 'Coca Cola'
                'quantity' => 2,
                'price' => 30000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 2, // ID dari order kedua (prosessed)
                'menu_id' => 2, // ID dari menu 'Pepperoni Pizza'
                'quantity' => 2,
                'price' => 190000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 3, // ID dari order ketiga (completed)
                'menu_id' => 3, // ID dari menu 'Veggie Pizza'
                'quantity' => 1,
                'price' => 85000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 3, // ID dari order ketiga (completed)
                'menu_id' => 6, // ID dari menu 'Orange Juice'
                'quantity' => 1,
                'price' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 4, // ID dari order keempat (cancelled)
                'menu_id' => 7, // ID dari menu 'Garlic Bread'
                'quantity' => 1,
                'price' => 30000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 5, // ID dari order kelima (pending)
                'menu_id' => 9, // ID dari menu 'BBQ Pizza'
                'quantity' => 1,
                'price' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 5, // ID dari order kelima (pending)
                'menu_id' => 4, // ID dari menu 'Hawaiian Pizza'
                'quantity' => 1,
                'price' => 90000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 6, // ID dari order keenam (completed)
                'menu_id' => 2, // ID dari menu 'Pepperoni Pizza'
                'quantity' => 2,
                'price' => 190000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 7, // ID dari order ketujuh (prosessed)
                'menu_id' => 8, // ID dari menu 'Chicken Wings'
                'quantity' => 1,
                'price' => 40000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
