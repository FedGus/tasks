<?php
$host = 'localhost';
$db = 'comments_db';
$user = 'root';
$pass = '';

global $pdo;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
} catch (PDOException $exception) {
    die("Ошибка подключения: " . $exception->getMessage());
}
