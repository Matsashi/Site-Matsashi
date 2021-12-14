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
    public static function addImage(){
        if(!empty($_FILES['picture'])){
            $info = pathinfo($_FILES['picture']['name']);
            $error_message = null;
            if($error_message==null)
            {
                if($_FILES['picture']['size'] > 1000000){
                    $error_message .= "depasse";
                }
                if( ($info['extension']!="jpg") && ($info['extension']!="png") && ($info['extension']!="jpeg") ){
                    $error_message.="format";
                }
            }
            if($error_message == null)
            {
                move_uploaded_file($_FILES['picture']['tmp_name'], "public/images/".$_FILES['name'].".".$info['extension']);
            }
        }else{
            throw new Exception("Vous n'avez pas ajouté d'image de couverture.");
        }
    }
}