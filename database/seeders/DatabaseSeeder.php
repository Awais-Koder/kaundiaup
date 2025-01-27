<?php

namespace Database\Seeders;

use App\Models\Certificate;
use App\Models\Citizen;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Certificate::factory(10)->create();
        Citizen::factory(100)->create();

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
