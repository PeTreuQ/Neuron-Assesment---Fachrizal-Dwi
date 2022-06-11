<?php
error_reporting(0);
ini_set('display_errors', 0);
session_start();
if ($_SESSION['csrf'] === $_POST['csrf'])
    echo '<h1>Not Allowed</h1>';
else "<table><tr><td>Nomer rekening</td><td>". $_POST['nomor_rekening'] ."</td></tr><tr><td>Jumlah</td><td>". $_POST['jumlah_transfer'] ."</td></tr></table>";
