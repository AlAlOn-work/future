<?php
$user = 'root';
$password = 'root';
$db = 'future';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$connect = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
);