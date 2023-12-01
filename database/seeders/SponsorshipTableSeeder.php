<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use Database\Factories\SponsorshipFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (SponsorshipFactory::$data as $sponsorshipData) {
            Sponsorship::create([
                'name' => $sponsorshipData['name'],
                'price' => $sponsorshipData['price'],
                'duration' => $sponsorshipData['duration'],
            ]);
        }
    }
}