<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
   
    public function run()
    {
        $users = [
            [
                "name"        => "Antonio",
                "lastname"    => "D'Angelo",
                "email"       => "antonio.dangelo1190@gmail.com",
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '11/09/1990')->format('Y-m-d'),
                "password"    => Hash::make('antonio12345'),
                "image"       => "",
            ],
            // [
            //     "name"        => "Luca",
            //     "lastname"    => "Casamassima",
            //     "email"       => "casamassimaluca723@gmail.com",
            //     'birth_date'  => Carbon::createFromFormat('d/m/Y', '10/11/1994')->format('Y-m-d'),
            //     "password"    => Hash::make('luca2001'),
            //     "image"       => "Luca.png",
            // ],
            // [
            //     "name"        => "Nicola",
            //     "lastname"    => "Soggiu",
            //     "email"       => "nicola.soggiu@gmail.com",
            //     'birth_date'  => Carbon::createFromFormat('d/m/Y', '10/11/1994')->format('Y-m-d'),
            //     "password"    => Hash::make('nicola96'),
            //     "image"       => "Nicola.png",
            // ],
            // [
            //     "name"        => "Lamberto",
            //     "lastname"    => "Neri",
            //     "email"       => "lamberto9107@hotmail.it",
            //     'birth_date'  => Carbon::createFromFormat('d/m/Y', '10/11/1994')->format('Y-m-d'),
            //     "password"    => Hash::make('Tato123'),
            //     "image"       => "Lamberto.png",
            // ],
        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}
