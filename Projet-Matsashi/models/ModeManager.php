<?php
class ModeManager extends Model{
    private $modeList;
    public function getTable(){
        $sql = "SELECT * FROM mode";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $data = $req->fetchALL(PDO::FETCH_OBJ);
        return $data;
    }
}