<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sponsorship;

class SponsorshipFactory extends Factory
{
    protected $model = Sponsorship::class;

    public static $data = [
        [
            'name' => 'Base',
            'price' => '10',
            'duration' => '12:00:00',
        ],
        [
            'name' => 'Medio',
            'price' => '18',
            'duration' => '24:00:00',
        ],
        [
            'name' => 'Pro',
            'price' => '30',
            'duration' => '48:00:00',
        ],
        [
            'name' => 'Platino',
            'price' => '105',
            'duration' => '182:00:00',
        ],
        [
            'name' => 'Diamante',
            'price' => '400',
            'duration' =>  '730:00:00',
        ],
    ];

    public function definition()
    {
        return self::$data[$this->faker->unique()->numberBetween(0, count(self::$data) - 1)];
    }

}
