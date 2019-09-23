<?php

$host = "127.0.0.1";
$database = "wolk_ase";
$user = "wolkase";
$password = "Ase123212";

$connect = new mysqli($host, $user, $password, $database);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

echo ("Connection successful");
