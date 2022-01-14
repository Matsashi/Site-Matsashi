<?php
class Support{
    private $id;
    private $name;
    private $text;
    private $pictureIRL;
    private $pictureConsole;
    private $idConstructeur;
    function __construct($ID, $name, $text, $pictureIRL, $pictureConsole, $idConstructeur)
    {
        $this->id = $ID;
        $this->name = $name;
        $this->text = $text;
        $this->pictureIRL = $pictureIRL;
        $this->pictureConsole = $pictureConsole;
        $this->idConstructeur = $idConstructeur;
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
    public function getPictureIRL()
    {
        return $this->pictureIRL;
    }
    public function setPictureIRL($pictureIRL): self
    {
        $this->pictureIRL = $pictureIRL;

        return $this;
    }
    public function getPictureConsole()
    {
        return $this->pictureConsole;
    }
    public function setPictureConsole($pictureConsole): self
    {
        $this->pictureConsole = $pictureConsole;

        return $this;
    }
    public function getIdConstructeur()
    {
        return $this->idConstructeur;
    }
    public function setIdConstructeur($idConstructeur): self
    {
        $this->idConstructeur = $idConstructeur;

        return $this;
    }
}