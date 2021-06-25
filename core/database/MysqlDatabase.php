<?php

namespace core\database;

use \PDO;

class MysqlDatabase extends Database{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;

    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass = 'Escalademroc69&', $db_host = 'localhost'){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    private function getPDO(){
        if($this->pdo === null){
            $pdo = new PDO('mysql:dbname=SaintHilBois;host=localhost', 'root', 'Escalademroc69&');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;    
        }
        return $this->pdo;
    }

    public function query($statement, $class = null, $one = false){
        $req = $this->getPDO()->query($statement);
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0 
        ){
            return $req;
        }
        if($class === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        if($one){
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }
        return $data;
    }

    public function prepare($statement, $attributes, $class = null, $one = false){
        $req = $this->getPDO()->prepare($statement);
        $res = $req->execute($attributes);
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0 
        ){
            return $res;
        }
            
        if($class === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        if($one){
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }
        return $data;
    }

    public function lastInsertId(){
        return $this->getPDO()->lastInsertId();
    }

}