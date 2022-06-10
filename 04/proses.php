<?php
    if ($_POST['provinsi'] == 1)
        $kotas = ['Bandung', 'Sumedang', 'Garut'];
    else
        $kotas = ['Denpasar', 'Kuta', 'Gili'];


    echo '<select>';
    foreach ($kotas as $kota)
        echo "<option>$kota</option>";
    echo '</select>';
