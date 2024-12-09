<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('orders')->insert([
            [
                'user_id' => 2, // ID dari customer 'Jane Smith'
                'order_date' => now(),
                'status' => 'pending',
                'total_price' => 85000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // ID dari customer 'Michael Johnson'
                'order_date' => now(),
                'status' => 'prosessed',
                'total_price' => 120000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5, // ID dari customer 'Chris Brown'
                'order_date' => now(),
                'status' => 'completed',
                'total_price' => 98000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 7, // ID dari customer 'Daniel Miller'
                'order_date' => now(),
                'status' => 'cancelled',
                'total_price' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 9, // ID dari customer 'Olivia Anderson'
                'order_date' => now(),
                'status' => 'pending',
                'total_price' => 65000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // ID dari customer 'Jane Smith'
                'order_date' => now(),
                'status' => 'completed',
                'total_price' => 105000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4, // ID dari customer 'Emily Davis'
                'order_date' => now(),
                'status' => 'prosessed',
                'total_price' => 115000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6, // ID dari customer 'Jessica Williams'
                'order_date' => now(),
                'status' => 'pending',
                'total_price' => 70000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 8, // ID dari customer 'Sophia Wilson'
                'order_date' => now(),
                'status' => 'completed',
                'total_price' => 150000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 9, // ID dari customer 'Olivia Anderson'
                'order_date' => now(),
                'status' => 'prosessed',
                'total_price' => 90000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
