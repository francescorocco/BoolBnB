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
        $apartements = [
            [
                "user_id"       => 1,
                "name"          => "Milano",
                "rooms"         => "4",
                "beds"          => "8",
                "bathrooms"     => "2",
                "mq"            => "100",
                "address"       => "c/da villetto 21",
                "lat"           => "",
                "lon"           => "",
                "photo"         => "",
                "visible"       => 0,

            ],

            [
                "user_id"       => 2,
                "name"          => "Roma",
                "rooms"         => "8",
                "beds"          => "12",
                "bathrooms"     => "3",
                "mq"            => "150",
                "address"       => "c/da saponara 11",
                "lat"           => "",
                "lon"           => "",
                "photo"         => "",
                "visible"       => 0,

            ],

            [
                "user_id"       => 3,
                "name"          => "Torino",
                "rooms"         => "2",
                "beds"          => "1",
                "bathrooms"     => "1",
                "mq"            => "60",
                "address"       => "via monti 1",
                "lat"           => "",
                "lon"           => "",
                "photo"         => "",
                "visible"       => 1,

            ],

            [
                "user_id"       => 4,
                "name"          => "Verona",
                "rooms"         => "10",
                "beds"          => "5",
                "bathrooms"     => "4",
                "mq"            => "220",
                "address"       => "via colomba",
                "lat"           => "",
                "lon"           => "",
                "photo"         => "",
                "visible"       => 0,

            ],

            [
                "user_id"       => 5,
                "name"          => "Bologna",
                "rooms"         => "1",
                "beds"          => "1",
                "bathrooms"     => "1",
                "mq"            => "20",
                "address"       => "via olimpia 24",
                "lat"           => "",
                "lon"           => "",
                "photo"         => "",
                "visible"       => 1,

            ],

            [
                "user_id"       => 6,
                "name"          => "Marsala",
                "rooms"         => "6",
                "beds"          => "3",
                "bathrooms"     => "2",
                "mq"            => "100",
                "address"       => "via florio 22",
                "lat"           => "",
                "lon"           => "",
                "photo"         => "",
                "visible"       => 0,

            ],

            [
                "user_id"       => 7,
                "name"          => "Palermo",
                "rooms"         => "10",
                "beds"          => "5",
                "bathrooms"     => "4",
                "mq"            => "300",
                "address"       => "via regione sicilia 66",
                "lat"           => "",
                "lon"           => "",
                "photo"         => "",
                "visible"       => 1,

            ],

            [
                "user_id"       => 8,
                "name"          => "Mazara",
                "rooms"         => "5",
                "beds"          => "3",
                "bathrooms"     => "3",
                "mq"            => "178",
                "address"       => "via astromonte 87",
                "lat"           => "",
                "lon"           => "",
                "photo"         => "",
                "visible"       => 1,

            ],

            [
                "user_id"       => 9,
                "name"          => "Genova",
                "rooms"         => "2",
                "beds"          => "2",
                "bathrooms"     => "1",
                "mq"            => "35",
                "address"       => "via maronara 22",
                "lat"           => "",
                "lon"           => "",
                "photo"         => "",
                "visible"       => 1,

            ],

            [
                "user_id"       => 10,
                "name"          => "Napoli",
                "rooms"         => "5",
                "beds"          => "3",
                "bathrooms"     => "2",
                "mq"            => "80",
                "address"       => "via maradona 10",
                "lat"           => "",
                "lon"           => "",
                "photo"         => "",
                "visible"       => 0,

            ],
        ]
        
        foreach ($apartments as $apartment) {
            //creare riga nel DB
            Apartment::create($apartment);
        }
    }
}
