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
                        if($url[1]=="create"){
                            $bookController->addBook();
                            break;
                        }else if($url[1]=="validate"){
                            $globalController->addImage();
                            $globalController->addPdf();
                            $bookController->addBookValidate();
                            break;
                        }else if($url[1]=="read"){
                            $bookController->displayBook($url[2]);
                            break;
                        }else if($url[1]=="update"){
                            $bookController->updateBook($url[2]);
                            break;
                        }else if($url[1]=="confirm"){
                            $pictureToAdd = $globalController->updateImage();
                            $pdfToAdd = $globalController->updatePdf();
                            $bookController->updateBookConfirm($pictureToAdd, $pdfToAdd, $url[2]);
                            break;
                        }else if($url[1]=="delete"){
                            $bookController->deleteBook($url[2]);
                            break;
                        }else{
                            throw new Exception("La page n'existe pas.");
                            break;
                        }
                    }else{

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