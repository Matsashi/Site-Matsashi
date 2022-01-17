<?php
class ConstructeurManager extends Model{
    private $constructeurList;
    public function getTable(){
        $sql = "SELECT * FROM constructeur";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $data = $req->fetchALL(PDO::FETCH_OBJ);
        return $data;
    }
    public function addConstructeur($newConstructeur){
        $this->constructeurList[] = $newConstructeur;
    }
    public function getConstructeurs()
    {
        return $this->constructeurList;
    }
    public function loadingConstructeurs(){
        $constructeurs = $this->getTable();
        foreach($constructeurs as $constructeur){
            $add = new Constructeur($constructeur->id_constructeur, $constructeur->name_constructeur, $constructeur->image_constructeur);
            $this->addConstructeur($add);
        }
    }
    public function getConstructeurById($id){
        foreach($this->constructeurList as $value){
            if($id == $value->getId()){
                return $value;
                break;
            }
        }
    }
    public function getConstructeurByName($name){
        foreach($this->constructeurList as $value){
            if($name == $value->getName()){
                return $value;
                break;
            }
        }
    }
}