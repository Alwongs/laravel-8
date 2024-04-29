<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post' => $this->faker->name,
            'description' => $this->faker->text,
            'image' => $this->faker->word . '.jpg',
            'user_id' => 1
        ];
    }
}
