<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array di utenti registrati al sito Bnb
        $users = [
            [
                "name"      => "Gianfranco",
                "lastname"  => "Orlandini",
                "email"     => "giafranco.orlandini@gmail.com",
                "password"  => bcrypt("gdfhsgbdjynr"),

            ],

            [
                "name"      => "Vincenzo",
                "lastname"  => "Di vita",
                "email"     => "vincenzo.divita@gmail.com",
                "password"  => bcrypt("hgnbfhhg"),
            ],

            [
                "name"      => "Gabriella",
                "lastname"  => "Marchese",
                "email"     => "gabriella.marchese@gmail.com",
                "password"  => bcrypt("4reyfhgy"),
            ],

            [
                "name"      => "Irene",
                "lastname"  => "Caiazzo",
                "email"     => "irene.caiazzo@gmail.com",
                "password"  => bcrypt("thrgefbhtrg"),
            ],

            [
                "name"      => "Vincenzo",
                "lastname"  => "Minardi",
                "email"     => "vincenzo.minardi@gmail.com",
                "password"  => bcrypt("rhfgegrge65r"),

            ],

            [
                "name"      => "Antonio",
                "lastname"  => "Nicolaci",
                "email"     => "antonio.nicolaci@gmail.com",
                "password"  => bcrypt("sa187el"),
            ],
        ];

        foreach ($users as $user) {
            //creare riga nel DB
            User::create($user);
        }
    }
}
