<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::factory()->create(); //$$ el libro dice que se use 'factory(User::class, 1)->create();' y me daba error || User::factory()->time(1)->create() este entra pero paco optimiza quitando el time y dandoselo al mismo factory(si es uno nada)
    }
}
