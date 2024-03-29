<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create
        (
            [
                'name' => 'Muhammad Farid Gilang Nuswantoro',
                
                'email' => 'admin@admin.com',
                
                'email_verified_at' => now(),
                
                'password' => '$2y$10$oMgQJpZ6CgHLx1fNbhYlpudhRlcImX2Oamdf3nQlb7QsG5C3jM3/i',

                'remember_token' => Str::random(10),

                'is_admin' => true
            ]
        );

        User::create
        (
            [
                'name' => 'Farid Dummy',
                
                'email' => 'faridgilang20050@gmail.com',
                
                'email_verified_at' => now(),
                
                'password' => '$2y$10$oMgQJpZ6CgHLx1fNbhYlpudhRlcImX2Oamdf3nQlb7QsG5C3jM3/i',

                'remember_token' => Str::random(10),

                'is_admin' => false
            ]
        );

        User::factory(100)->create();

        Todo::factory(500)->create();

    }
}
