<?php
namespace nuris\lemari\lemari01\kotak02;
include ('LaporanBulanan.php');
use nuris;
class bukuHadir
{
    function listKehadiran(){
        $kehadiran = [
            ['tanggal' => '2022-06-03', 'status_kehadiran'=>'Hadir'],
            ['tanggal' => '2022-06-04', 'status_kehadiran'=>'Hadir'],
        ];
        return $kehadiran;
    }

    function displayLaporanBulanan(){
        $objLaporan = new nuris\LaporanBulanan();
        return $objLaporan->getLaporanBulanan();
    }
}