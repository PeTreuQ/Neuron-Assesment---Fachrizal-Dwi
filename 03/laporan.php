<?php
include ('bukuHadir.php');

use nuris\lemari\lemari01\kotak02\bukuHadir;
$nuris = new bukuHadir();

print_r($nuris->listKehadiran());
print_r($nuris->displayLaporanBulanan());
