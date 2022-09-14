<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'vandor_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9]),
            'hno'=>$this->faker->randomDigit(),
            'street'=>$this->faker->address(),
            'landmark'=>$this->faker->address(),
            'city'=>$this->faker->randomElement(['jabalpur','rewa','katni','indore']),
            'pincode'=>482002,
            'mobile_alt'=>$this->faker->phoneNumber(),

        ];
    }
}
