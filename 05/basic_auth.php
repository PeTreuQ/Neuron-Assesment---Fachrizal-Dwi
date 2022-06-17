<?php
//unset($_SERVER['PHP_AUTH_USER']);
$username = 'admins';
$username = 'password';


if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic');
    header('HTTP/1.0 401 Unauthorized');
    echo 'silahkan masukan username dan password';
} else
    echo 'Hallo '.$_SERVER['PHP_AUTH_USER']. ', Password: '. $_SERVER['PHP_AUTH_PW'].PHP_EOL;