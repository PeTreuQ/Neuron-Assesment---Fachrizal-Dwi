<?php
$topiSaya  = 'bundar';
if ($topiSaya !='bundar')
    echo 'Bukan Topi Saya'.PHP_EOL;
else
    echo 'Topi Saya'.PHP_EOL;

echo $topiSaya === 'bundar' ? 'Topi Saia'.PHP_EOL : 'Bukan Topi Saia'.PHP_EOL;

$nilai = 50;
echo ($nilai >= 90) ? 'Bagus' : ($nilai >= 80) ? 'Lumayan' : ($nilai >= 70) ? 'Biasa' : 'Jelek';