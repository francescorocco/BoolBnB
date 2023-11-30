<?php

namespace Database\Factories;

use App\Models\Message;
use App\Models\Apartment;
use Illuminate\Database\Eloquent\Factories\Factory;


class MessageFactory extends Factory
{

    protected $model = Message::class;
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
