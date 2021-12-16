<?php
include_once("models/Game.php");
include_once("models/GameManager.php");
class GameController{
    private $gameManager;
    function __construct(){        
        $this->gameManager = new GameManager;        
    }
    public function addGame($name, $date, $files){
        $this->gameManager->addGameDB($name, $date, $files);
    }
}
?>