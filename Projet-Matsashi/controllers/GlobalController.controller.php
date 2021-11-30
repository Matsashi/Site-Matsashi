<?php
include_once("models/User.php");
include_once("models/UserManager.php");
class GlobalController{
    private $userManager;
    function __construct(){        
        $this->userManager = new UserManager;
        $this->userManager -> loadingUsers();        
    }
    public function connexionUsers($login, $password){
        $message = $this->userManager->connexionUser($login, $password);
        return $message;
    }
}