<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create fake category food
        kategori::create([
            'nama_kategori' => 'Makanan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        kategori::create([
            'nama_kategori' => 'Minuman',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        kategori::create([
            'nama_kategori' => 'Kue',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        kategori::create([
            'nama_kategori' => 'Kacang',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        kategori::create([
            'nama_kategori' => 'Kacang Hijau',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        kategori::create([
            'nama_kategori' => 'Kacang Telor',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        kategori::create([
            'nama_kategori' => 'Kacang Keputih',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        kategori::create([
            'nama_kategori' => 'Kacang Kepat',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        kategori::create([
            'nama_kategori' => 'Kacang Kepang',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        kategori::create([
            'nama_kategori' => 'Kacang Kepas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        kategori::create([
            'nama_kategori' => 'Kacang Kepit',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
