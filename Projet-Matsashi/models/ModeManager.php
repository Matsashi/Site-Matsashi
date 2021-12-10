<?php
class ModeManager extends Model{
    public function getTable(){
        $sql = "SELECT * FROM mode";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $data = $req->fetchALL(PDO::FETCH_OBJ);
        return $data;
    }
}