<?php

class Database
{
    private $link;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $config = require_once "config.php";
        $dsn = 'mysql:host=' . $config['conn']['HOSTNAME'] . ';dbname=' . $config['conn']['DBNAME'] . ';charset=' . $config['conn']['CHARSET'];
        $this->link = new PDO($dsn, $config['conn']['USERNAME'], $config['conn']['PASSWORD']);
        return $this;
    }

    public function execute($sql)
    {
        $sth = $this->link->prepare($sql);

        return $sth->execute();
    }

    public function fetch($sql)
    {
        $sth = $this->link->prepare($sql);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);

        if($result === false){
            return [];
        }
        return $result;
    }
    public function fetchAll($sql)
    {
        $sth = $this->link->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if($result === false){
            return [];
        }
        return $result;
    }
}

$db = new Database();