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
    public function getSupports()
    {
        return $this->supportList;
    }
    public function addSupportDB($supportName, $supportPictureIRL, $supportText, $supportPictureConsole, $idConstructeur){
        $irl = pathinfo($_FILES['pictureIRL']['name']);
        $console = pathinfo($_FILES['pictureConsole']['name']);
        $sql = "INSERT INTO support (name_support, text_support, picture_support, picture_console_support, id_constructeur) VALUES (:support_name, :support_text, :support_imageIRL, :support_imageConsole, :support_idConstructeur)";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([":support_name"=>$supportName, ":support_text"=>$supportText, ":support_imageIRL"=>$supportPictureIRL["name"], ":support_imageConsole"=>$supportPictureConsole["name"], ":support_idConstructeur"=>$idConstructeur]);
    }
    public function updateSupportDB($supportName, $file, $supportText, $supportId){
        if($file["pictureIRL"]["name"] !== ""){
            $info = pathinfo($file['pictureIRL']['name']);
            $sql = "UPDATE support SET name_support = :support_name, text_support = :support_text, picture_support = :support_image WHERE id_support = $supportId;";
            $req = $this->getDB()->prepare($sql);
            $result = $req->execute([":support_name"=>$supportName, ":support_text"=>$supportText, ":support_image"=>$file["pictureIRL"]["name"]]);
        }
        if($file["pictureConsole"]["name"] !== ""){
            $info = pathinfo($file['pictureConsole']['name']);
            $sql = "UPDATE support SET name_support = :support_name, text_support = :support_text, picture_support = :support_image WHERE id_support = $supportId;";
            $req = $this->getDB()->prepare($sql);
            $result = $req->execute([":support_name"=>$supportName, ":support_text"=>$supportText, ":support_image"=>$file["pictureConsole"]["name"]]);
        }
        if(($file["pictureIRL"]["name"] == "") && ($file["pictureConsole"]["name"] == "")){
            $sql = "UPDATE support SET name_support = :support_name, text_support = :support_text WHERE id_support = $supportId;";
            $req = $this->getDB()->prepare($sql);
            $result = $req->execute([":support_name"=>$supportName, ":support_text"=>$supportText]);
        }  
    }
    public function addSupport($newSupport){
        $this->supportList[] = $newSupport;
    }
    public function loadingSupports(){
        $supports = $this->getTable();
        foreach($supports as $support){
            $add = new Support($support->id_support, $support->name_support, $support->text_support, $support->picture_support, $support->picture_console_support, $support->idConstructeur);
            $this->addSupport($add);
        }
    }
    public function getSupportById($id){
        foreach($this->supportList as $value){
            if($id == $value->getId()){
                return $value;
                break;
            }
        }
    }
    public function getSupportByName($name){
        foreach($this->supportList as $value){
            if($name == $value->getName()){
                return $value;
                break;
            }
        }
    }
    public function deleteSupportDB($id){
        $sql = "DELETE FROM support WHERE id_support = :id";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([":id"=>$id]);
    }
}