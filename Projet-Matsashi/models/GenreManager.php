<?php
class GenreManager extends Model{
    private $genreList;
    public function getTable(){
        $sql = "SELECT * FROM genre";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $data = $req->fetchALL(PDO::FETCH_OBJ);
        return $data;
    }
}