<?php
ob_start();
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "
https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
include "controllers/GameController.controller.php";
include "controllers/GlobalController.controller.php";
include "controllers/SupportController.controller.php";
$globalController = new GlobalController;
$supportController = new SupportController;
$gameController = new GameController;
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
                    if(!empty($_COOKIE["pseudo"])){
                        if(isset($url[2])){
                            $supportName = $supportController->supportByID($url[2]);
                            require "views/modify-support.view.php";
                            break;
                        }else{                   
                            if($url[1] == "panel"){
                                header('location:'.URL.'admin/panel');
                                // A VÉRIFIER !;
                                break;
                            }else if($url[1] == "add-game"){
                                $editeurs = $globalController->getEditeurs();
                                $genres = $globalController->getGenres();
                                $modes = $globalController->getModes();
                                $supports = $supportController->displaySupports();
                                require "views/add-game.view.php";
                                break;
                            }else if($url[1] == "add-support"){
                                $constructeurs = $globalController->getConstructeurs();
                                require "views/add-support.view.php";
                                break;
                            }else if($url[1] == "update-game"){
                                $newGame = $gameController->displayGames();
                                require "views/update-game.view.php";
                                break;
                            }else if($url[1] == "update-support"){
                                $newSupport = $supportController->displaySupports();
                                require "views/update-support.view.php";
                                break;
                            }else if($url[1] == "disconnect"){
                                $globalController->disconnectUsers();
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
                                header('location:'.URL.'admin/update-support');
                                // A VÉRIFIER !;
                                break;
                            }else if($url[1]=="deleteSupport"){
                                $supportController->deleteSupport($url[2]);
                                header ('location:' .URL.'admin/update-support');
                                // A VÉRIFIER !
                                break;
                            }else if($url[1]=="deleteGame"){
                                $gameController->deleteGame($url[2]);
                                header ('location:' .URL.'admin/update-game');
                                // A VÉRIFIER !
                                break;
                            }
                        }
                    }else{
                        if(!empty($_POST['login']) && !empty($_POST['password'])){
                            $message = $globalController->connexionUsers($_POST['login'], $_POST['password']);
                            if($message == "OK"){
                                // require "views/panel.view.php";
                                header('location:'.URL.'admin/panel');
                                // A VÉRIFIER !;
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
                    if(!empty($_COOKIE["pseudo"])){
                        // require "views/panel.view.php";
                        header('location:'.URL.'admin/panel');
                        // A VÉRIFIER !;
                        break;
                    }else{
                        require "views/admin.view.php";
                        break;
                    }
                }
            case "contact":
                if(isset($url[1])){
                    if($url[1] == "send"){

                        $mailAdress = $_POST['mail'];
                        /* Create a new PHPMailer object. */
                        $mail = new PHPMailer();

                        /* Charset */
                        $mail->CharSet = 'UTF-8';

                        /* Tells PHPMailer to use SMTP. */
                        $mail->isSMTP();
                        
                        /* SMTP server address. */
                        $mail->Host = 'mail49.lwspanel.com';

                        /* Use SMTP authentication. */
                        $mail->SMTPAuth = TRUE;
                        
                        /* Set the encryption system. */
                        $mail->SMTPSecure = 'tls';
                        
                        /* SMTP authentication username. */
                        $mail->Username = 'contact@matsashi.fr';
                        
                        /* SMTP authentication password. */
                        $mail->Password = 'gD3*FB@wfHk2xfE';
                        
                        /* Set the SMTP port. */
                        $mail->Port = 587;

                        /* Debug */
                        $mail->SMTPDebug = 0;

                        /* Set the mail sender. */
                        $mail->setFrom('contact@matsashi.fr', $mailAdress);

                        /* L'adresse de réponse */
                        $mail->addReplyTo($mailAdress);

                        /* Add a recipient. */
                        $mail->addAddress('contact@matsashi.fr', 'Matsashi');

                        /* Set the subject. */
                        $mail->Subject = $_POST['subject'];

                        /* Set the mail message body. */
                        $mail->Body = $_POST['message'];

                        /* Finally send the mail. */
                        if (!$mail->send())
                        {
                            /* PHPMailer error. */
                            echo $mail->ErrorInfo;
                        }
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