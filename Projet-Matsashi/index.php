<?php
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "
https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
// include "controllers/BookController.controller.php";
// include "controllers/GlobalController.controller.php";
try{
    if(empty($_GET['page'])){
        require "views/accueil.view.php";
    }else{
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        switch ($url[0]){
            case 'accueil':
                require "views/accueil.view.php";
                break;
            case "bibliotheque":
                if(isset($url[1])){
                    if(isset($url[2])){
                        if($url[2]=="ps1"){
                            require "views/ps1.view.php";
                            break;
                        }else if($url[2]=="ps2"){
                            require "views/ps2.view.php";
                            break;
                        }else if($url[2]=="ps3"){
                            require "views/ps3.view.php";
                            break;
                        }else if($url[2]=="ps4"){
                            require "views/ps4.view.php";
                            break;
                        }else if($url[2]=="ps5"){
                            require "views/ps5.view.php";
                            break;
                        }else{
                            throw new Exception("La page n'existe pas.");
                            break;
                        }
                    }else{
                        if($url[1]=="sony"){
                            require "views/sony.view.php";
                            break;
                        }else if($url[1]=="microsoft"){
                            require "views/microsoft.view.php";
                            break;
                        }else if($url[1]=="sega"){
                            require "views/sega.view.php";
                            break;
                        }else if($url[1]=="nintendo"){
                            require "views/nintendo.view.php";
                            break;
                        }else{
                            throw new Exception("La page n'existe pas.");
                            break;
                        }
                    }
                }else{
                    require "views/bibliotheque.view.php";
                    break;
                }
                default :
                throw new Exception("La page n'existe pas.");
            
            case "admin":
            require "views/admin.view.php";
            break;
            // default :
            //     $message = "Une erreur imprévue est survenue";
        }        
    } 
}catch(Exception $e){
    $error =  $e->getMessage();
    require "views/error.view.php";
}