<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => 'AdminPOS',
            'email' => 'adminpos@gmail.com',
            'password' => bcrypt('admintoko'),
            'level' => 1,
            'remember_token' => Str::random(10),
        ]);
    }
}
