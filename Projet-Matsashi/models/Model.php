<?php
abstract class Model{
    private $pdo;
    private function setDB(){
        $this->pdo = new PDO("mysql:host=185.98.131.148; dbname=matsa1638281;charset=utf8", "matsa1638281", "x5ppc9bo6z");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    protected function getDB(){
        if($this->pdo == null){
            $this->setDB();
        }
        return $this->pdo;
    }
}