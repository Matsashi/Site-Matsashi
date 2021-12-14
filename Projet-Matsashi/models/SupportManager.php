<?php
class SupportManager extends Model{
    private $supportList;
    public function getTable(){
        $sql = "SELECT * FROM support";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $data = $req->fetchALL(PDO::FETCH_OBJ);
        return $data;
    }
    public function addSupportDB($supportName, $supportPicture, $supportText){
        $info = pathinfo($_FILES['picture']['name']);
        $sql = "INSERT INTO support (name_support, text_support, picture_support) VALUES (:support_name, :support_text, :support_image)";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([":support_name"=>$supportName, ":support_text"=>$supportText, ":support_image"=>$supportPicture["name"]]);
    }
}