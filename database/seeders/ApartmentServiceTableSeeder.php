<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApartmentServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        $apartmentIds = DB::table('apartments')->pluck('id')->toArray();
        $serviceIds = DB::table('services')->pluck('id')->toArray();

        foreach ($apartmentIds as $apartmentId) {
            // Randomly select a few services to associate with each apartment
            $numberOfServices = $faker->numberBetween(1, 5);
            $selectedServices = $faker->randomElements($serviceIds, $numberOfServices);

            foreach ($selectedServices as $serviceId) {
                DB::table('apartment_service')->insert([
                    'apartment_id' => $apartmentId,
                    'service_id' => $serviceId,
                ]);
            }
        }
    }
};
