<?php
require_once "./connection.php";

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function fetchAll($pdo)
{
    $sql = "SELECT * FROM test";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll();

//    dd($result);
}

