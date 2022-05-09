<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function create()
    {
        $penjualan = new Penjualan();
        $penjualan->id_penjualan = null;
        $penjualan->total_item = null;
        $penjualan->total_harga = null;
        $penjualan->diskon = null;
        $penjualan->bayar = null;
        $penjualan->diterima = null;
        $penjualan->id_user = auth()->id();
        $penjualan->save();

        session(['id_penjualan' => $penjualan->id_penjualan]);
        return redirect()->route('transaksi.index');
    }
}
