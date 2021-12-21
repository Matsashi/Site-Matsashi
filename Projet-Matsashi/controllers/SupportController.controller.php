<?php
include_once("models/Support.php");
include_once("models/SupportManager.php");
class SupportController{
    private $supportManager;
    function __construct()
    {
        $this->supportManager = new SupportManager;
        $this->supportManager -> loadingSupports();
    }
    public function addSupport($supportName, $supportPicture, $supportText){
        $this->supportManager->addSupportDB($supportName, $supportPicture, $supportText);
    }
    public function displaySupports(){
        $newSupport = $this->supportManager->getSupports();
        return $newSupport;
    }
    public function deleteSupport($id){
        $cover = $this->supportManager->getSupportById($id)->getPicture();
        $this->supportManager-> deleteSupportDB($id);
        unlink("public/images/".$cover);
        header ('location:' .URL.'admin/update-support');
    }
}