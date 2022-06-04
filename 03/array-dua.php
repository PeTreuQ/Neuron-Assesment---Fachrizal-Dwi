<?php
$kendaraan = ['Motor', 'Mobil', 'Sepeda'];
if (in_array( 'Motor', $kendaraan))
    echo 'ada'.PHP_EOL;
else
    echo 'tidak ada'.PHP_EOL;

$a = array(array('f', 'i'), array('p', 'r'), 'o');
if (in_array(array('f', 'i'), $a)) {
    echo "'fi' was found\n";
}

$kendaraan2 = ['Kijang', 'Panther'];

print_r(array_merge($kendaraan, $kendaraan2));

/** find key from associative array */
$smartphone = [
    'ram' => '4Gb',
    'os' => 'Android'
];
if(key_exists('ram', $smartphone))
    echo 'key ditemukan'.PHP_EOL;