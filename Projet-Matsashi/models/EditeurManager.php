<?php
class EditeurManager extends Model{
    private $editeurList;
    public function getTable(){
        $sql = "SELECT * FROM editeur";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $data = $req->fetchALL(PDO::FETCH_OBJ);
        return $data;
    }
}