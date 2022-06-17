<?php

$fileSize = $_FILES['file']['size'];
$fileType = mime_content_type($_FILES['file']['tmp_name']);
$fileName = $_FILES['file']['name'];

if ($fileSize > 5000000)
    echo 'Ukuran terlalu besar';

if (in_array($fileType, ['image/jpg', 'image/jpeg', 'image/png']))
    move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'. md5(date('Y-m-d H:i:s')).$fileName);
else
    echo "silahkan masukan ekstensi dengan benar";
