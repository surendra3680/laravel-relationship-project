<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vandor>
 */
class VandorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'is_active'=>$this->faker->randomElement(['0','1']),
            'password' => '$2y$10$6bapjCaGpkUtfuMxYhORYenZ9M78QDT1f2tTYD.IqO8uO/ZmKfrBK' // password
        ];
    }
}
