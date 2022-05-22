<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {   
        User::create([
            'name' => 'admin2',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('admin123'),
            'level' => 1,
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'kasir',
            'email' => 'kasir@gmail.com',
            'password' => bcrypt('kasir123'),
            'level' => 2,
            'remember_token' => Str::random(10),
        ]);

    }
}
