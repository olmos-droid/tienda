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
        $genere= Genere::all();
        return [
            'title'=>$this->faker->name(),
            'synopsis'=>$this->faker->realText(150,2),
            'duration'=>$this->faker->numberBetween(60,200),
            'type' => $this->faker->boolean(),
            'genere'=>$this->faker->randomElement($genere),
            'year'=>$this->faker->year(),
            'price'=>$this->faker->numberBetween($min = 15, $max = 60),
            'image' => $this->faker->imageUrl($width = 320, $height = 240,'Image',true),
            'file' => $this->faker->file($sourceDir = '/', $targetDir = '/tmp'),
        ];
    }
}
