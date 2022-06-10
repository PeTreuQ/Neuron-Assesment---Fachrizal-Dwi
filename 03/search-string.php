<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mencari Kata Dalam Kalimat Dengan PHP</title>
</head>
<body>
<?php
    $string = "terima kasih saudara, selamat anda sudah menyelesaikan training ini";
    $keyword = 'selamat';

    if(preg_match("/$keyword/i", $string)) {
        echo "Kata : " . $keyword . " Ketemu";
    }
    else {
        echo "Kata : " . $keyword . " Tidak Ketemu";
    }
?>
</body>
</html>