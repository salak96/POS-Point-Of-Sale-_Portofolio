<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\pengeluaran;
class PengeluaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create fake id_pengeluaran	deskripsi	nominal	created_at	updated_at	
        Pengeluaran::create([
            'deskripsi' => 'Pengeluaran 1',
            'nominal' => '10000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Pengeluaran::create([
            'deskripsi' => 'Pengeluaran 2',
            'nominal' => '20000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Pengeluaran::create([
            'deskripsi' => 'Pengeluaran 3',
            'nominal' => '30000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Pengeluaran::create([
            'deskripsi' => 'Pengeluaran 4',
            'nominal' => '40000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Pengeluaran::create([
            'deskripsi' => 'Pengeluaran 5',
            'nominal' => '50000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
