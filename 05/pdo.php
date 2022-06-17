<?php

$dsn = 'pgsql:host=10.60.161.110;port=5432;dbname=notification_platform';
$pdo = new PDO($dsn, 'admos', 'Digi#2020');
$stm = $pdo->prepare('SELECT * FROM public.global_params')->execute();
var_dump($stm);