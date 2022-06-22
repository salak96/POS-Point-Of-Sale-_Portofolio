<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan_nuta extends Model
{
    use HasFactory;
    protected $table = 'penjualan_nuta';
    protected $primaryKey = 'id_penjualan_nuta';
    protected $fillable = [
        'id_penjualan_nuta',
        'id_penjualan',
        'id_nuta',
        'jumlah_nuta',
        'harga_nuta',
        'total_harga_nuta',
    ];
    
}
