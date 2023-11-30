<?php

namespace Database\Factories;

use App\Models\Visit;
use App\Models\Apartment;
use Illuminate\Database\Eloquent\Factories\Factory;


class VisitFactory extends Factory
{
    protected $model = Visit::class;

    public function definition()
    {
        return [
            'apartment_id' => $this->faker->randomElement(Apartment::pluck('id')),
            'ip'    => $this->faker->ipv6,
            'date'  => $this->faker->date,

        ];
    }
}
