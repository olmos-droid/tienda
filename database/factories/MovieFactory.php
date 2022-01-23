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
            'title'=>$this->faker->name(),
            'synopsis'=>$this->faker->realText(150,2),
            'duration'=>$this->faker->numberBetween(60,200),
            'image' => $this->faker->imageUrl($width = 320, $height = 240, 'movies', true, 'laravel'),
            // 'genere' =>Genere::pluck('id')->random(),
            'year'=>$this->faker->year(),

        ];
    }
}
