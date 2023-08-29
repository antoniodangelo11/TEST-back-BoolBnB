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
                'username'    => 'Admin',
                'lastname'    => 'Admin',
                'email'       => 'Admin@gmail.com',
                'birth_date'  => Carbon::createFromFormat('d/m/Y', '01/01/2023')->format('Y-m-d'),
                'password'    => Hash::make('admin12345'),
            ],
        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}
