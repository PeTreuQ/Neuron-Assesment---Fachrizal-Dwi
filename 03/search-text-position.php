<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mencari Posisi Text di Dalam Kalimat</title>
</head>
<body>
<?php
    $string = "Anda Beruntung memenangkan pertandingan ini";
    $searchKeyword = 'Beruntung';
    $hasil = stripos($string, $searchKeyword);
    echo "$searchKeyword Berada Pada Posisi ke: ". ($hasil+1);
?>
</body>
</html>