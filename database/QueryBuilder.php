<?php
class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function selectAll($table)
    {
        $sql = "SELECT * FROM {$table}";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
    function newUser ($name, $surname, $mail, $password)
    {
//        $sql = "INSERT INTO users (name, surname, mail) VALUES (:name, :surname, :mail)";
////
////        $stmt = $this->pdo->prepare($sql);
////
////        $stmt->execute();

        $sql = "INSERT INTO users (name, surname, mail, password) VALUES (?,?,?,?)";

        $stmt= $this->pdo->prepare($sql);

        $stmt->execute([$name, $surname, $mail, $password]);
    }
}