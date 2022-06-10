<?php
$kendaraan = ['Sepeda', 'Mobil', 'Motor', 'Zebra'];
asort($kendaraan);
print_r($kendaraan);
rsort($kendaraan);
print_r($kendaraan);

$string = 'Hello World';
print_r(explode(' ', $string));