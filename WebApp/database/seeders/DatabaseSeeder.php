<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Galas;
use App\Models\Swims;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        //Galas::factory(35)->create();

        $users = User::all();
        foreach ($users as $user)
        {
            Swims::factory()->create(['user-id' => $user->id]);
        }

    }
}
