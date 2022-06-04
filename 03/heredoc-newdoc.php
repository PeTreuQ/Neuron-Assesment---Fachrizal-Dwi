<?php
$name = 'Nuris Akbar';
$pesanKonfirmasi = "Selamat, Nuris Akbar
Anda Berhak Mendapatkan Hadiah Mobile ABCD".PHP_EOL;
echo $pesanKonfirmasi;

/** Heredoc */
$pesan = <<< TEXT
Selamat, $name
Anda Berhak Mendapatkan Hadiah Mobile ABCD
TEXT;
echo $pesan.PHP_EOL;

/** Newdoc */
$pesan = <<< 'TEXT'
Selamat, $name
Anda Berhak Mendapatkan Hadiah Mobile ABCD
TEXT;
echo $pesan;