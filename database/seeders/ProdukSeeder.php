<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////create fake produk food id_kategori	kode_produk	nama_produk	merk	harga_beli	diskon	harga_jual	stok	created_at	updated_at
        produk::create([
            'id_kategori' => 1,
            'kode_produk' => 'PR001',
            'nama_produk' => 'Kacang Hijau',
            'merk' => 'Kacang Hijau',
            'harga_beli' => 10000,
            'diskon' => 0,
            'harga_jual' => 12000,
            'stok' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        produk::create([
            'id_kategori' => 1,
            'kode_produk' => 'PR002',
            'nama_produk' => 'Kacang Keputih',
            'merk' => 'Kacang Keputih',
            'harga_beli' => 10000,
            'diskon' => 0,
            'harga_jual' => 12000,
            'stok' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        produk::create([
            'id_kategori' => 1,
            'kode_produk' => 'PR003',
            'nama_produk' => 'Kacang Kepat',
            'merk' => 'Kacang Kepat',
            'harga_beli' => 10000,
            'diskon' => 0,
            'harga_jual' => 12000,
            'stok' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        produk::create([
            'id_kategori' => 1,
            'kode_produk' => 'PR004',
            'nama_produk' => 'Kacang Telor',
            'merk' => 'Kacang Telor',
            'harga_beli' => 10000,
            'diskon' => 0,
            'harga_jual' => 12000,
            'stok' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        produk::create([
            'id_kategori' => 1,
            'kode_produk' => 'PR005',
            'nama_produk' => 'Kacang Kepang',
            'merk' => 'Kacang Kepang',
            'harga_beli' => 10000,
            'diskon' => 0,
            'harga_jual' => 12000,
            'stok' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}