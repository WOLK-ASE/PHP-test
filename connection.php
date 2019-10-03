<?php
$host = '127.0.0.1';

$db   = 'wolk_ase';

$user = 'Test0';

$pass = 'Test12';


$charset = 'utf8';

$connect = new MySQLi($host, $user, $pass, $db);

//Or

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
   die($e->getMessage());
};



