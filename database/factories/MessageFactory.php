<?php

namespace Database\Factories;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'apartment_id' => $this->faker->randomElement(Apartment::pluck('id')),
            'name'         => $this->faker->name(),
            'lastname'     => $this->faker->lastName(),
            'email'        => $this->faker->safeEmail(),
            'text'         => $this->faker->text(),
        ];
    }
}
