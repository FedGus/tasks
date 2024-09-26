<?php
$host = 'localhost';
$db = 'comments_db';
$user = 'root';
$pass = '';

$connect = mysqli_connect($host, $user, $pass, $db);

if ($connect == false) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
