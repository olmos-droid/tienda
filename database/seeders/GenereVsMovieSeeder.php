<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MovieVsGenere;


class GenereVsMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MovieVsGenere::factory(150)->create();
        }
}
