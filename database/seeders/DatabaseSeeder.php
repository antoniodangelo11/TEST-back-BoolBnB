<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ApartmentsTableSeeder::class,
            AddressesTableSeeder::class,
            ImagesTableSeeder::class,
            MessagesTableSeeder::class,
            ViewsTableSeeder::class,
            SponsorshipsTableSeeder::class,
            ServicesTableSeeder::class,
        ]);
        
    }
}
