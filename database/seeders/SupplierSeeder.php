<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create fake id_supplier	nama	alamat	telepon	created_at	updated_at
        Supplier::create([
            'nama' => 'Supplier 1',
            'alamat' => 'Jl. Raya Cikarang',
            'telepon' => '081212121212',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Supplier::create([
            'nama' => 'Supplier 2',
            'alamat' => 'Jl. Raya Solo',
            'telepon' => '081212121212',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Supplier::create([
            'nama' => 'Supplier 3',
            'alamat' => 'Jl. Raya klaten',
            'telepon' => '081212121212',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Supplier::create([
            'nama' => 'Supplier 4',
            'alamat' => 'Jl. Raya',
            'telepon' => '081212121212',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
