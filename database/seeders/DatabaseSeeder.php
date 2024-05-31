<?php

namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Member;
use App\Models\Trainer;
use App\Models\Exercise;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\MemberTrainerFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Exercise::factory(40)->create();
        Member::factory(5)->create();
        Trainer::factory(5)->create();

    }
}
