<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class SponsorchipFactory extends Factory
{
    private static $UniqueSponsor = 0;

    public function definition()
    {

        self::$UniqueSponsor++;

        return [
            'name',
            'price',
            'duration'
        ];
    }
}


protected function ($UniqueSponsor){
    
}