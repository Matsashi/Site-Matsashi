<?php
class Support{
    private $id;
    private $name;
    private $text;
    private $picture;
    function __construct($ID, $name, $text, $picture)
    {
        $this->id = $ID;
        $this->name = $name;
        $this->text = $text;
        $this->picture = $picture; 
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }
    public function getText()
    {
        return $this->text;
    }
    public function setText($text): self
    {
        $this->text = $text;

        return $this;
    }
    public function getPicture()
    {
        return $this->picture;
    }
    public function setPicture($picture): self
    {
        $this->picture = $picture;

        return $this;
    }
}