<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create fake member id_member	kode_member	nama	alamat	telepon	created_at	updated_at	
        Member::create([
            'kode_member' => 'M001',
            'nama' => 'Amelia',
            'alamat' => 'Jl. Raya Cikarang',
            'telepon' => '081212121212',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Member::create([
            'kode_member' => 'M002',
            'nama' => 'Bayu',
            'alamat' => 'Jl. Raya Solo',
            'telepon' => '081212121212',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Member::create([
            'kode_member' => 'M003',
            'nama' => 'fatma',
            'alamat' => 'Jl. Raya klaten',
            'telepon' => '081212121212',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Member::create([
            'kode_member' => 'M004',
            'nama' => 'Putri',
            'alamat' => 'Jl. Raya',
            'telepon' => '081212121212',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
