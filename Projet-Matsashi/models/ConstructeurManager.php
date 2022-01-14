<?php
class ConstructeurManager extends Model{
    private $constructeurList;
    public function getTable(){
        $sql = "SELECT * FROM constructeur";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $data = $req->fetchALL(PDO::FETCH_OBJ);
        return $data;
    }
}