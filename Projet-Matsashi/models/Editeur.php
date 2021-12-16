<?php
class Editeur{
    private $id;
    private $name;

    function __construct($ID, $name){
        $this->id = $ID;
        $this->name = $name;    
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
        return $this;
    }
}