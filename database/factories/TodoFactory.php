<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->name(),
            'age' => random_int(19,39),
            'task'=>$this->faker->text(50),
            'complete'=>$this->faker->boolean(10),
            'created_at'=>now(),
            'updated_at'=>now()
        ];
    }
}
