<?php

namespace Database\Seeders;

use App\Models\Birth;
use App\Models\NationalIDCard;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 't@t.com',
            'password' => '11111111'
        ]);
        User::factory()->create([
            'name' => 'admin',
            'email' => 'a@a.com',
            'password' => '11111111'
        ]);
        Birth::factory()->times(100)->create();
        NationalIDCard::factory()->times(100)->create();

    }
}
