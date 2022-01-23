<?php

namespace Database\Seeders;

use App\Models\GenereVsMovie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(GenereSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(GenereVsMovieSeeder::class);
        
    }
}
