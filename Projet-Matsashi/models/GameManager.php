<?php
require_once "models/Model.php";
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
    public function addGameDB(){
        $info = pathinfo($_FILES['picture']['name']);
        $sql = "INSERT INTO jeu (nom, nbPages, image) VALUES (:livre_nom, :livre_pages, :livre_image)";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([":livre_nom"=>$_POST['title'], ":livre_pages"=>$_POST['nbPages'], ":livre_image"=>$_POST['title'].".".$info['extension']]);
    }
    // public function getGames()
    // {
    //     return $this->gameList;
    // }
    // public function loadingBooks(){
    //     $books = $this->getTable();
    //     foreach($books as $book){
    //         $add = new Livre($book->idLivre, $book->nom, $book->nbPages, $book->image);
    //         $this->addBook($add);
    //     }
    // }
    // public function getGameById($id){
    //     foreach($this->gameList as $value){
    //         if($id == $value->getId()){
    //             return $value;
    //             break;
    //         }
    //     }
    // }
    // public function updateBookDB($id){
    //     $info = pathinfo($_FILES['picture']['name']);
    //     $sql = "UPDATE livres SET  nom=(:livre_nom), nbPages=(:livre_pages), image=(:livre_image) WHERE idLivre=$id";
    //     $req = $this->getDB()->prepare($sql);
    //     $result = $req->execute([":livre_nom"=>$_POST['title'], ":livre_pages"=>$_POST['nbPages'], ":livre_image"=>$_POST['title'].".".$info['extension']]);
    // }
    // public function deleteGameDB($id){
    //     $sql = "DELETE FROM jeu WHERE id_jeu = :id";
    //     $req = $this->getDB()->prepare($sql);
    //     $result = $req->execute([":id"=>$id]);
    // }
}