<?php
include_once("models/Support.php");
include_once("models/SupportManager.php");
class SupportController{
    private $supportManager;
    function __construct()
    {
        $this->supportManager = new SupportManager;
    }
    public function addSupport($supportName, $supportPicture, $supportText){
        $this->supportManager->addSupportDB($supportName, $supportPicture, $supportText);
    }
    public function getSupports(){
        $supports = $this->supportManager->getTable();
        return $supports;
    }
}