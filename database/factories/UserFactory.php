<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {

        $firstName = $this->faker->unique()->firstName();
        $lastName = $this->faker->lastName();

        return [
            'name'  =>  $firstName,
            'lastname'  =>  $lastName,
            'email' =>  strtolower($firstName . '.' . $lastName . 'test.com'),
            'password'  =>  bcrypt('asdfasdf'),
        ];
    }
}
