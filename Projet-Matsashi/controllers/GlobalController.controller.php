<?php
include_once("models/User.php");
include_once("models/UserManager.php");
include_once("models/Mode.php");
include_once("models/ModeManager.php");
include_once("models/Editeur.php");
include_once("models/EditeurManager.php");
include_once("models/Genre.php");
include_once("models/GenreManager.php");

class GlobalController{
    private $userManager;
    private $modeManager;
    private $editeurManager;
    private $genreManager;
    function __construct(){      
        $this->userManager = new UserManager;
        $this->modeManager = new ModeManager;
        $this->editeurManager = new EditeurManager;
        $this->genreManager = new GenreManager;
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
    public function getEditeurs(){
        $editeurs = $this->editeurManager->getTable();
        return $editeurs;
    }
    public function getGenres(){
        $genres = $this->genreManager->getTable();
        return $genres;
    }
    public static function addImageGame($files){
        if(!empty($files['front']) && !empty($files['back'])){
            $infoFront = pathinfo($files['front']['name']);
            $infoBack = pathinfo($files['back']['name']);
            $error_message = null;
            if($error_message==null)
            {
                if(($files['front']['size'] > 1000000) && ($files['back']['size'] > 1000000)){
                    $error_message .= "depasse";
                }
                if( ($infoFront['extension']!="jpg") && ($infoFront['extension']!="png") && ($infoFront['extension']!="jpeg") && ($infoBack['extension']!="jpg") && ($infoBack['extension']!="png") && ($infoBack['extension']!="jpeg")){
                    $error_message.="format";
                }
            }
            if($error_message == null)
            {
                move_uploaded_file($files['front']['tmp_name'], "public/images/".$files['front']['name'].".".$infoFront['extension']);
                move_uploaded_file($files['back']['tmp_name'], "public/images/".$files['back']['name'].".".$infoBack['extension']);
            }
        }else{
            throw new Exception("Vous n'avez pas ajouté d'image de couverture.");
        }
    }
    public static function addImage($file){
        if(empty($file['pictureIRL']) || empty($file['pictureConsole'])){
            throw new Exception("Vous n'avez pas ajouté toutes les images nécessaires.");
        }else{
            $info = pathinfo($file['pictureIRL']['name']);
            $error_message = null;
            if($error_message==null){
                if($file['pictureIRL']['size'] > 1000000){
                    $error_message .= "depasse";
                }
                if( ($info['extension']!="jpg") && ($info['extension']!="png") && ($info['extension']!="jpeg") ){
                    $error_message.="format";
                }
            }
            if($error_message == null){
                move_uploaded_file($file['pictureIRL']['tmp_name'], "public/images/matt_consoles/".$file['pictureIRL']['name']);
            }
            if($error_message == null){
                $info = pathinfo($file['pictureConsole']['name']);
                $error_message = null;
                if($error_message==null){
                    if($file['pictureConsole']['size'] > 1000000){
                        $error_message .= "depasse";
                    }
                    if(($info['extension']!="png")){
                        $error_message.="format";
                    }
                }
                if($error_message == null){
                    move_uploaded_file($file['pictureConsole']['tmp_name'], "public/images/consoles/".$file['pictureConsole']['name']);
                    $error_message = "OK";
                }
            }
            return $error_message;
        }
    }
    public static function updateImage($file, $pictureName){
        if(!empty($file['pictureIRL'])){
            $info = pathinfo($file['pictureIRL']['name']);
            $error_message = null;
            if($error_message==null){
                if($file['pictureIRL']['size'] > 1000000){
                    $error_message .= "depasse";
                }
                if( ($info['extension']!="jpg") && ($info['extension']!="png") && ($info['extension']!="jpeg") ){
                    $error_message.="format";
                }
            }
            if($error_message == null){
                unlink("public/images/matt_consoles/". $pictureName);
                move_uploaded_file($file['picture']['tmp_name'], "public/images/matt_consoles".$file['pictureIRL']['name']);
            }
        }
        if(!empty($file['pictureConsole'])){
            $info = pathinfo($file['pictureConsole']['name']);
            $error_message = null;
            if($error_message==null){
                if($file['pictureConsole']['size'] > 1000000){
                    $error_message .= "depasse";
                }
                if(($info['extension']!="png")){
                    $error_message.="format";
                }
            }
            if($error_message == null){
                unlink("public/images/consoles/". $pictureName);
                move_uploaded_file($file['pictureConsole']['tmp_name'], "public/images/consoles/".$file['pictureConsole']['name']);
            }
        }
        if(empty($file['pictureIRL']) && empty($file['pictureConsole'])){
            throw new Exception("Vous n'avez pas ajouté d'image.");
        }
    }
}