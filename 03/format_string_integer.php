<!DOCTYPE html>
<html lang="en">
<head>
    <title>Format String Dan Integer</title>
</head>
<body>
<?php
    $jumlah = 100000000;
    function rupiah($jumlah){
        return number_format($jumlah, 0,',', '.');
    }
    echo rupiah($jumlah);
    echo '<br>';
    $string = 'Hello World';
    echo strtoupper($string).'<br>';
    echo strtolower($string).'<br>';
    echo substr($string,0,4).'<br>';
?>
</body>
</html>