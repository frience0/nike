<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(ProductSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'marckfrience0@gmail.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => null,
        ]);
    }
}
