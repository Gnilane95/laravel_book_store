<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->sentence(),
            'description'=>fake()->paragraph(6),
            'url_img'=>"https://source.unsplash.com/640x480/?person?/1",
            'price'=>fake()->numberBetween(10, 500),
            'author'=>fake()->name(),
            'nombre_pages' =>fake()->numerify(),
        ];
    }
}
