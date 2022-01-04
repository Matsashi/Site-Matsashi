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
    public function addSupportDB($supportName, $supportPicture, $supportText){
        $info = pathinfo($_FILES['picture']['name']);
        $sql = "INSERT INTO support (name_support, text_support, picture_support) VALUES (:support_name, :support_text, :support_image)";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([":support_name"=>$supportName, ":support_text"=>$supportText, ":support_image"=>$supportPicture["name"]]);
    }
    public function updateSupportDB($supportName, $supportPicture, $supportText, $supportId){
        if($_FILES["picture"]["name"] !== ""){
            $info = pathinfo($_FILES['picture']['name']);
            $sql = "UPDATE support SET name_support = :support_name, text_support = :support_text, picture_support = :support_image WHERE id_support = $supportId;";
            $req = $this->getDB()->prepare($sql);
            $result = $req->execute([":support_name"=>$supportName, ":support_text"=>$supportText, ":support_image"=>$_FILES["picture"]["name"]]);
        }else{
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
            $add = new Support($support->id_support, $support->name_support, $support->text_support, $support->picture_support);
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