<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => '    ',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('securepassword'),
                'role' => 'customer',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael.johnson@example.com',
                'password' => Hash::make('password456'),
                'role' => 'customer',
                'email_verified_at' => null,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily Davis',
                'email' => 'emily.davis@example.com',
                'password' => Hash::make('mypassword'),
                'role' => 'admin',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chris Brown',
                'email' => 'chris.brown@example.com',
                'password' => Hash::make('chris123'),
                'role' => 'customer',
                'email_verified_at' => null,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jessica Williams',
                'email' => 'jessica.williams@example.com',
                'password' => Hash::make('jessica789'),
                'role' => 'admin',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Daniel Miller',
                'email' => 'daniel.miller@example.com',
                'password' => Hash::make('danielpass'),
                'role' => 'customer',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sophia Wilson',
                'email' => 'sophia.wilson@example.com',
                'password' => Hash::make('sophia123'),
                'role' => 'customer',
                'email_verified_at' => null,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'David Moore',
                'email' => 'david.moore@example.com',
                'password' => Hash::make('david456'),
                'role' => 'admin',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Olivia Anderson',
                'email' => 'olivia.anderson@example.com',
                'password' => Hash::make('olivia789'),
                'role' => 'customer',
                'email_verified_at' => null,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
