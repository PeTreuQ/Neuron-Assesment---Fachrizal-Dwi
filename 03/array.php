<?php
$kendaraan = ['Motor', 'Mobil', 'Sepeda'];

echo "Jumlah Item pada Array Kendaraan adalah ".count($kendaraan).PHP_EOL;
print_r($kendaraan);
$removedSpaceArray = array_map('trim', $kendaraan);
print_r($removedSpaceArray);

$upperArray = array_map('strtoupper', $kendaraan);
print_r($upperArray);

$rangeGaji = [4000000, 5000000, 10000000];
function rupiah($jumlah){
    return number_format($jumlah, 0,',', '.');
}

print_r(array_map('rupiah', $rangeGaji));