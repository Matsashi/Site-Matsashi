<?php
include_once("models/User.php");
include_once("models/UserManager.php");
include_once("models/Mode.php");
include_once("models/ModeManager.php");
class GlobalController{
    private $userManager;
    private $modeManager;
    function __construct(){      
        $this->userManager = new UserManager;
        // $this->userManager -> loadingUsers();
        $this->modeManager = new ModeManager;
    }
    public function connexionUsers($login, $password){
        $message = $this->userManager->connexionUser($login, $password);
        return $message;
    }
    public function disconnectUsers(){
        $this->userManager->disconnectUser();
    }
    public function getModes(){
        $modes = $this->modeManager->getTable();
        return $modes;
    }
}