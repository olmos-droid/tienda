<?php

namespace Database\Factories;

use App\Models\Genere;
use App\Models\Movie;


use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    protected $movie = Movie::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->unique()->word(),
            'synopis'=>$this->faker->realText(75,2),
            'duration'=>$this->faker->numberBetween(60,200),
            // 'genere' =>Genere::pluck('id')->random(),
            'year'=>$this->faker->year(),

        ];
    }
}
