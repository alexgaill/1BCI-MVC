<?php

class Database{

    private $host = "localhost:8889"; // localhost:3306
    private $dbname = "blog";
    private $user = "root"; 
    private $pass = "root"; // ""
    public $pdo;


    /**
     * Db connection
     */
    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("SET NAMES UTF8");
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

    /**
     * Return data from Db
     *
     * @param string $statement
     * @param boolean $one
     * @return object || array
     */
    public function getData(string $statement, bool $one = false)
    {
        $query = $this->pdo->query($statement);

        if ($one) {
            return $query->fetch(PDO::FETCH_OBJ);
        }
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}