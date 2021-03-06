<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'review_id' => $this->faker->numberBetween(1, 30),
            'user_id' => $this->faker->numberBetween(1, 200),
            'content' => $this->faker->realText(),
        ];
    }
}
