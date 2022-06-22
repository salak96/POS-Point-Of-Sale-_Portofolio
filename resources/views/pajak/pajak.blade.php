@extends('layouts.admin-layout',
[
    'title' => "Daftar Pembelian",
   
    ]
)


@section('content')
@extends('layouts.admin-layout',
[
    'title' => "Daftar Pembelian",
   
    ]
)


@section('content')
{{-- {{-- buatlah fungsi get / post untuk menghitung Total Harga Sebelum Pajak (Dasar 
Pengenaan Pajak / Net Sales) dan Rupiah Pajak.
Input : --}}
{{-- - total : number (misal 22000)
- persen_pajak : number (misal 10)
Output Json : - net_sales
- pajak_rp
Misal : 
{ "net_sales" : …, "pajak_rp" : … } --}}
function hitungPajak(total, persen_pajak) {
    var pajak_rp = 0;
    var net_sales = total;
    if (persen_pajak > 0) {
        pajak_rp = total * persen_pajak / 100;
        net_sales = total - pajak_rp;
    }
    return {
        "net_sales": net_sales,
        "pajak_rp": pajak_rp
    };
} --}}

{{-- buatlah fungsi post untuk menghitung total rupiah diskon dan total harga setelah 
diskon dengan inputan diskon persen bertingkat.
Input :
- discounts : json array of number 
misal : { "discounts" : [{"diskon":"20"},{"diskon":"10"}] } - total_sebelum_diskon : number
misal : 100000
Output Json :
- total_diskon
- total_harga_setelah_diskon
Misal : 
{
 "total_diskon": …,
 "total_harga_setelah_diskon": … } --}}
function hitungDiskon(discounts, total_sebelum_diskon) {
    var total_diskon = 0;
    var total_harga_setelah_diskon = total_sebelum_diskon;
    if (discounts.length > 0) {
        for (var i = 0; i < discounts.length; i++) {
            var diskon = discounts[i].diskon;
            total_diskon += total_harga_setelah_diskon * diskon / 100;
            total_harga_setelah_diskon -= total_harga_setelah_diskon * diskon / 100;
        }
    }
    return {
        "total_diskon": total_diskon,
        "total_harga_setelah_diskon": total_harga_setelah_diskon
    };
{{-- 
    buatlah fungsi post untuk menghitung share revenue ojek online food.
    Input :
    - harga_sebelum_markup : number (misal 10000)
    - markup_persen : number (misal 10 / 20 / 25)
    - share_persen : number (misal 20)
    Output Json :
    - net_untuk_resto
    - share_untuk_ojol
    Misal : 
    {
     "net_untuk_resto": …,
     "share_untuk_ojol": … } --}}
function hitungShareOjol(harga_sebelum_markup, markup_persen, share_persen) {
    var net_untuk_resto = harga_sebelum_markup;
    var share_untuk_ojol = 0;
    if (markup_persen > 0) {
        net_untuk_resto = harga_sebelum_markup * markup_persen / 100;
    }
    if (share_persen > 0) {
        share_untuk_ojol = net_untuk_resto * share_persen / 100;
    }
    return {
        "net_untuk_resto": net_untuk_resto,
        "share_untuk_ojol": share_untuk_ojol
    };
}
{{-- Database nutacloud mampu menampung data banyak perusahaan
1 perusahaan bisa punya banyak outlet (DeviceID)
1 outlet bisa punya banyak perangkat (DeviceNo)
Tiap perangkat bisa melakukan input
Tiap perangkat bisa saling edit data yang diinput oleh perangkat lain
1 mastercategory punya banyak masteritem
1 sale punya banyak saleitemdetail
1 saleitemdetail hanya 1 masteritem
relasi kolom yang harus dihubungkan antara mastercategory dan masteritem 
mastercategory masteritem
PerusahaanNo PerusahaanNo
DeviceID DeviceID
DeviceNo CategoryDeviceNo
CategoryID CategoryID
relasi kolom yang harus dihubungkan antara sale dan saleitemdetail
sale saleitemdetail
PerusahaanNo PerusahaanNo
DeviceID DeviceID
DeviceNo TransactionDeviceNo
TransactionID TransactionID
relasi kolom yang harus dihubungkan antara masteritem dan saleitemdetail
masteritem saleitemdetail
PerusahaanNo PerusahaanNo
DeviceID DeviceID
DeviceNo ItemDeviceNo
ItemID ItemID
Buatlah query yang menampilkan semua kategori dan item baik laku maupun 
tidak laku, semua itemnya, Qty (kalau tidak laku maka tampilkan 0), dan SubTotal 
(kalau tidak laku maka tampil 0) untuk outlet bernama Mie Rampok Manukan 
Surabaya (PerusahaanNo=639, DeviceID=1356) pada tanggal (kolom SaleDate)
'2017-05-11 --}}

{{-- //create query  yang menampilkan semua kategori dan item baik laku maupun 
tidak laku, semua itemnya, Qty (kalau tidak laku maka tampilkan 0), dan SubTotal 
(kalau tidak laku maka tampil 0) untuk outlet bernama Mie Rampok Manukan 
Surabaya (PerusahaanNo=639, DeviceID=1356) pada tanggal (kolom SaleDate)
'2017-05-11 --}} --}}
    
    {{-- //create query  yang menampilkan semua kategori dan item baik laku maupun  
    tidak laku, semua itemnya, Qty (kalau tidak laku maka tampilkan 0), dan SubTotal
    (kalau tidak laku maka tampil 0) untuk outlet bernama Mie Rampok Manukan
    Surabaya (PerusahaanNo=639, DeviceID=1356) pada tanggal (kolom SaleDate)
    '2017-05-11 --}}
    {{-- //create query  yang menampilkan semua kategori dan item baik laku maupun
    tidak laku, semua itemnya, Qty (kalau tidak laku maka tampilkan 0), dan SubTotal
    (kalau tidak laku maka tampil 0) untuk outlet bernama Mie Rampok Manukan
    Surabaya (PerusahaanNo=639, DeviceID=1356) pada tanggal (kolom SaleDate)
    '2017-05-11 --}}
    {{-- //create query  yang menampilkan semua kategori dan item baik laku maupun
    tidak laku, semua itemnya, Qty (kalau tidak laku maka tampilkan 0), dan SubTotal
    (kalau tidak laku maka tampil 0) untuk outlet bernama Mie Rampok Manukan
    Surabaya (PerusahaanNo=639, DeviceID=1356) pada tanggal (kolom SaleDate)
    '2017-05-11 --}}
    {{-- //create query  yang menampilkan semua kategori dan item baik laku maupun
        

@endpush