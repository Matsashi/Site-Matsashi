<?php
session_start();
ob_start();
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "
https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
include "controllers/GameController.controller.php";
include "controllers/GlobalController.controller.php";
include "controllers/SupportController.controller.php";
include "controllers/ConstructeurController.controller.php";
$globalController = new GlobalController;
$supportController = new SupportController;
$gameController = new GameController;
$constructeurController = new ConstructeurController;
try{
    if(empty($_GET['page'])){
        $url[0] = "accueil";
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
                        if($url[1]=="sony"){
                            $supportName = $supportController->supportByName($url[2]);
                            require "views/console-sony.view.php";
                            break;
                        }else if($url[1]=="microsoft"){
                            require "views/console-microsoft.view.php";
                            break;
                        }else if($url[1]=="nintendo"){
                            require "views/console-nintendo.view.php";
                            break;
                        }else if($url[1]=="sega"){
                            require "views/console-sega.view.php";
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
                if(isset($url[1])){
                    if(!empty($_SESSION["pseudo"])){
                        if(isset($url[2])){
                            if($url[1]=="deleteSupport"){
                                $supportController->deleteSupport($url[2]);
                                header ('location: https://matsashi.fr/admin/update-support');
                                break;
                            }else if($url[1]=="update-support"){
                            $supportName = $supportController->supportByID($url[2]);
                            $constructeurName = $constructeurController->constructeurById($supportName->getIdConstructeur());
                            $constructeurs = $constructeurController->getConstructeurs();
                            require "views/modify-support.view.php";
                            break;
                            }
                        }else{                   
                            if($url[1] == "panel"){
                                require "views/panel.view.php";
                                break;
                            }else if($url[1] == "add-game"){
                                $editeurs = $globalController->getEditeurs();
                                $genres = $globalController->getGenres();
                                $modes = $globalController->getModes();
                                $supports = $supportController->displaySupports();
                                require "views/add-game.view.php";
                                break;
                            }else if($url[1] == "add-support"){
                                $constructeurs = $constructeurController->getConstructeurs();
                                require "views/add-support.view.php";
                                break;
                            }else if($url[1] == "update-game"){
                                $newGame = $gameController->displayGames();
                                require "views/update-game.view.php";
                                break;
                            }else if($url[1] == "update-support"){
                                $newSupport = $supportController->displaySupports();
                                $newConstructeur = $constructeurController->displayConstructeurs();
                                require "views/update-support.view.php";
                                break;
                            }else if($url[1] == "disconnect"){
                                $globalController->disconnectUsers();
                                header('location: https://matsashi.fr/admin');
                                break;
                            }else if($url[1] == "validate"){
                                $globalController->addImageGame($_FILES);
                                $gameController->addGame($_POST["title"], $_POST["date"], $_FILES);
                                require "views/panel.view.php";
                                break;
                            }else if($url[1] == "validate2"){
                                $globalController->addImage($_FILES);
                                $supportController->addSupport($_POST["name"], $_FILES["pictureIRL"], $_POST["text"], $_FILES["pictureConsole"], $_POST["constructeur"]);
                                require "views/panel.view.php";
                                break;
                            }else if($url[1] == "validate3"){                                
                                if($_FILES["pictureIRL"]["name"] !== ""){
                                    $pictureIRLName = $supportController->supportByID($_POST["id"])->getPictureIRL();
                                    $globalController->updateImage($_FILES, $pictureIRLName);
                                }
                                if($_FILES["pictureConsole"]["name"] !== ""){
                                    $pictureConsoleName = $supportController->supportByID($_POST["id"])->getPictureConsole();
                                    $globalController->updateImage($_FILES, $pictureConsoleName);
                                }
                                $supportController->updateSupport($_POST["name"], $_FILES, $_POST["text"], $_POST["id"]);
                                header('location: https://matsashi.fr/admin/update-support');
                                break;
                            }else if($url[1]=="deleteGame"){
                                $gameController->deleteGame($url[2]);
                                header ('location: https://matsashi.fr/admin/update-game');
                                break;
                            }
                        }
                    }else{
                        if(!empty($_POST['login']) && !empty($_POST['password'])){
                            $message = $globalController->connexionUsers($_POST['login'], $_POST['password']);
                            if($message == "OK"){
                                header('location: https://matsashi.fr/admin/panel');
                                break;
                            }else{
                                require "views/admin.view.php";
                                break;
                            } 
                        }else{
                            require "views/admin.view.php";
                            break;
                        }
                    }                    
                }else{
                    if(!empty($_SESSION["pseudo"])){
                        require "views/panel.view.php";
                        break;
                    }else{
                        require "views/admin.view.php";
                        break;
                    }
                }
            case "contact":
                if(isset($url[1])){
                    if($url[1] == "send"){
                        $globalController->sendMail();
                        require "views/contact.view.php";
                        break;
                    }
                }else{
                    require "views/contact.view.php";
                    break;
                }
            // default :
            //     $message = "Une erreur imprévue est survenue";
        }        
    } 
}catch(Exception $e){
    $error =  $e->getMessage();
    require "views/error.view.php";
}