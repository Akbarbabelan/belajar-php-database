<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "root";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);

    echo "Sukses terkoneksi ke database MySql" . PHP_EOL;

    //menutup koneksi
    $connection = null;
}catch (PDOException $exception){
    echo "Gagal tterkoneksi ke database Mysql : " . $exception->getMessage() . PHP_EOL;
}