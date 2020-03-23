<?php

class Database
{

    private $pdo;
    private $number;

    public function __construct($login, $password, $database_name, $host)
    {
        $this->pdo = new PDO("mysql:host=$host;dbname=$database_name", $login, $password);
        $this->pdo->query("SET NAMES 'utf8'");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }

    /**
     * @param $query
     * @param bool|array $params
     * @return PDOStatement
     */

    public function query($query, $params = false)
    {
        if ($params) {
            $req = $this->pdo->prepare($query);
            $req->execute($params);
            $this->number = $req->rowCount();
        } else {
            $req = $this->pdo->query($query);
            $req->execute();
            $this->number = $req->rowCount();
        }
        return $req;
    }

    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }

    public function countResult()
    {
        return $this->number;
    }

}
