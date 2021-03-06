<?php
include_once("models/Game.php");
include_once("models/GameManager.php");
class GameController{
    private $gameManager;
    function __construct(){        
        $this->gameManager = new GameManager;
        $this->gameManager -> loadingGames();
    }
    public function addGame($name, $date, $files){
        $this->gameManager->addGameDB($name, $date, $files);
    }
    public function displayGames(){
        $newGame = $this->gameManager->getGames();
        return $newGame;
    }
    public function deleteGame($id){
        $cover = $this->gameManager->getGameById($id)->getCover();
        $this->gameManager-> deleteGameDB($id);
        unlink("public/images/".$cover);
        header ('location:' .URL.'admin/update-game');
    }
}
?>