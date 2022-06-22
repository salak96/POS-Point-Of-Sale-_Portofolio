{{-- Buatlah program untuk melakukan pengecekan apakah suatu bilangan adalah kelipatan dari 7, jika benar maka cetak “bestada” tanpa tanda kutip dan jika bukan maka cetak bilangannya dan disetiap akhir batas bilangan yang dicek maka cetak “sukses” tanpa tanda kutip. Misal:
-> Input: range 15, output: 1,2,3,4,5,6,bestada,8,9,10,11,12,13,bestada,sukses --}}
<?php
$range = 15;
$i = 1;
$bestada = "bestada";
$sukses = "sukses";
while ($i <= $range) {
    if ($i % 7 == 0) {
        echo $bestada;
    } else {
        echo $i;
    }
    $i++;
    if ($i <= $range) {
        echo ",";
    }
}
echo $sukses;
?>
{{-- Output: 1,2,3,4,5,6,bestada,8,9,10,11,12,13,bestada,sukses --}}


