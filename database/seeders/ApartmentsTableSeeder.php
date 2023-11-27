<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Camere all'interno del sito
        $apartments = [
            [
                "user_id"      => 1,
                "name"         => "Milano",
                "rooms"        => 4,
                "beds"         => 8,
                "bathrooms"    => 2,
                "mq"           => 100,
                "address"      => "c/da villetto 21",
                "lat"          => "",
                "lon"          => "",
                "photo"        => "",
                "visible"      => "si",
            ],

            [
                "user_id"      => 2,
                "name"         => "Roma",
                "rooms"        => 8,
                "beds"         => 12,
                "bathrooms"    => 3,
                "mq"           => 150,
                "address"      => "c/da saponara 11",
                "lat"          => "",
                "lon"          => "",
                "photo"        => "",
                "visible"      => "si",
            ],



            [
                "user_id"      => 10,
                "name"         => "Napoli",
                "rooms"        => 5,
                "beds"         => 3,
                "bathrooms"    => 2,
                "mq"           => 80,
                "address"      => "via maradona 10",
                "lat"          => "",
                "lon"          => "",
                "photo"        => "",
                "visible"      => "si",
            ],
        ];

        foreach ($apartments as $apartment) {
            //creare riga nel DB
            Apartment::create($apartment);
        }
    }
}
