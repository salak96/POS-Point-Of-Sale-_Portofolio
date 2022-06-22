<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call ([
            SettingTableSeeder::class,
            UserSeeder::class,
            AdminSeeder::class,
            KategoriSeeder::class,
            ProdukSeeder::class,
            MemberSeeder::class,
            SupplierSeeder::class,
            PengeluaranSeeder::class,
            // PembelianSeeder::class,
        ]);
    }
}
