<?php

namespace Database\Factories;

use App\Models\Apartment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apartment>
 */
class ApartmentFactory extends Factory
{
    protected $model = Apartment::class;

    // Contatore statico per tenere traccia della prima chiamata
    private static $visibleCounter = 0;

    public function definition()
    {
        
        self::$visibleCounter++;

        return [
            'user_id'   => $this->faker->randomElement(User::pluck('id')),
            'name'      => $this->faker->unique()->city(),
            'rooms'     => $this->faker->numberBetween(1, 5),
            'bathrooms' => $this->faker->numberBetween(1, 2),
            'mq'        => $this->faker->numberBetween(50, 150),
            'address'   => $this->faker->streetAddress(),
            'lat'       => '0',
            'lon'       => '0',
            'photo'     => '',
            'visible'   => self::$visibleCounter === 1 ? 0 : 1,
        ];
    }
}
