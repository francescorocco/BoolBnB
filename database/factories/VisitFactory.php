<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class VisitFactory extends Factory
{
    protected $model = Visit::class;

    public function definition()
    {
        return [

            'ip'    => $this->faker->ipv6,
            'date'  => $this->faker->date,
        ];
    }
}
