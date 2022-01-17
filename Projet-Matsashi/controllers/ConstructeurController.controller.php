<?php
include_once("models/Constructeur.php");
include_once("models/ConstructeurManager.php");

class ConstructeurController{
    private $constructeurManager;

    function __construct(){
        $this->constructeurManager = new ConstructeurManager;
        $this->constructeurManager -> loadingConstructeurs();
    }
    public function getConstructeurs(){
        $constructeurs = $this->constructeurManager->getTable();
        return $constructeurs;
    }
    public function displayConstructeurs(){
        $newConstructeur = $this->constructeurManager->getConstructeurs();
        return $newConstructeur;
    }
    public function constructeurByName($name){
        $constructeurName = $this->constructeurManager->getConstructeurByName($name);
        return $constructeurName;
    }
    public function constructeurByID($id){
        $constructeurID = $this->constructeurManager->getConstructeurById($id);
        return $constructeurID;
    }
}