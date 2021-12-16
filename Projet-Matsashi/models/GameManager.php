<?php
include "models/Model.php";
class GameManager extends Model{
    private $gameList;
    public function getTable(){
        $sql = "SELECT * FROM jeu";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $data = $req->fetchALL(PDO::FETCH_OBJ);
        return $data;
    }
    public function addGame($newGame){
        $this->gameList[] = $newGame;
    }
    public function addGameDB($name, $date, $files){
        $infoFront = pathinfo($files['front']['name']);
        $infoBack = pathinfo($files['back']['name']);
        $sql = "INSERT INTO jeu (name_jeu, date_jeu, front_cover_jeu, back_cover_jeu) VALUES (:jeu_nom, :jeu_date, :jeu_front, :jeu_back)";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([":jeu_nom"=>$name, ":jeu_date"=>$date, ":jeu_front"=>$files['front']['name'].".".$infoFront['extension'], ":jeu_back"=>$files['back']['name'].".".$infoBack['extension']]);
    }
}