<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 5 users, each with one profile
        User::factory()
            ->has(Profile::factory())
            ->count(5)
            ->create();
    }
}
