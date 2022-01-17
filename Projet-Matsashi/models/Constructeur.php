<?php
class Constructeur{
    private $id;
    private $name;
    private $image;

    function __construct($ID, $name, $image){
        $this->id = $ID;
        $this->name = $name;
        $this->image = $image;
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
    public function getImage(){
        return $this->image;
    }
    public function setImage($image){
        $this->image = $image;
        return $this;
    }
}