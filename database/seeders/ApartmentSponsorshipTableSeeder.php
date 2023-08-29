<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApartmentSponsorshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $apartmentIds = DB::table('apartments')->pluck('id')->toArray();
        $sponsorshipIds = DB::table('sponsorships')->pluck('id')->toArray();

        foreach ($apartmentIds as $apartmentId) {
            // Randomly select a sponsorship for each apartment
            $sponsorshipId = $faker->randomElement($sponsorshipIds);

            // Generate random init and end dates
            $initDate = $faker->dateTimeBetween('-30 days', 'now');
            $endDate = $faker->dateTimeInInterval($initDate, '+30 days');

            DB::table('apartment_sponsorship')->insert([
                'apartment_id' => $apartmentId,
                'sponsorship_id' => $sponsorshipId,
                'init_date' => $initDate,
                'end_date' => $endDate,
            ]);
        }
    }
};
