<?php
class Jeu{
    private $id;
    private $front_cover;
    private $back_cover;
    private $name;
    private $support_name;
    private $date;
    private $time_played;
    private $completion;
    private $playlist;
    private $redif;
    private $clip_title;
    private $clip_link;
    private $review_title;
    private $review_text;

    function __construct($ID, $front_cover, $back_cover, $name, $support_name, $date)
    {
        $this->id = $ID;
        $this->front_cover = $front_cover;
        $this->back_cover = $back_cover;
        $this->name = $name;
        $this->support_name = $support_name;
        $this->date = $date;   
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }
    public function getCover()
    {
        return $this->cover;
    }
    public function setCover($cover): self
    {
        $this->cover = $cover;

        return $this;
    }
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of front_cover
     */
    public function getFrontCover()
    {
        return $this->front_cover;
    }

    /**
     * Set the value of front_cover
     */
    public function setFrontCover($front_cover): self
    {
        $this->front_cover = $front_cover;

        return $this;
    }

    /**
     * Get the value of back_cover
     */ 
    public function getBack_cover()
    {
        return $this->back_cover;
    }

    /**
     * Set the value of back_cover
     *
     * @return  self
     */ 
    public function setBack_cover($back_cover)
    {
        $this->back_cover = $back_cover;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of support_name
     */
    public function getSupportName()
    {
        return $this->support_name;
    }

    /**
     * Set the value of support_name
     */
    public function setSupportName($support_name): self
    {
        $this->support_name = $support_name;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     */
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of time_played
     */
    public function getTimePlayed()
    {
        return $this->time_played;
    }

    /**
     * Set the value of time_played
     */
    public function setTimePlayed($time_played): self
    {
        $this->time_played = $time_played;

        return $this;
    }

    /**
     * Get the value of completion
     */
    public function getCompletion()
    {
        return $this->completion;
    }

    /**
     * Set the value of completion
     */
    public function setCompletion($completion): self
    {
        $this->completion = $completion;

        return $this;
    }

    /**
     * Get the value of playlist
     */
    public function getPlaylist()
    {
        return $this->playlist;
    }

    /**
     * Set the value of playlist
     */
    public function setPlaylist($playlist): self
    {
        $this->playlist = $playlist;

        return $this;
    }

    /**
     * Get the value of redif
     */
    public function getRedif()
    {
        return $this->redif;
    }

    /**
     * Set the value of redif
     */
    public function setRedif($redif): self
    {
        $this->redif = $redif;

        return $this;
    }

    /**
     * Get the value of clip_title
     */
    public function getClipTitle()
    {
        return $this->clip_title;
    }

    /**
     * Set the value of clip_title
     */
    public function setClipTitle($clip_title): self
    {
        $this->clip_title = $clip_title;

        return $this;
    }

    /**
     * Get the value of clip_link
     */
    public function getClipLink()
    {
        return $this->clip_link;
    }

    /**
     * Set the value of clip_link
     */
    public function setClipLink($clip_link): self
    {
        $this->clip_link = $clip_link;

        return $this;
    }

    /**
     * Get the value of review_title
     */
    public function getReviewTitle()
    {
        return $this->review_title;
    }

    /**
     * Set the value of review_title
     */
    public function setReviewTitle($review_title): self
    {
        $this->review_title = $review_title;

        return $this;
    }

    /**
     * Get the value of review_text
     */
    public function getReviewText()
    {
        return $this->review_text;
    }

    /**
     * Set the value of review_text
     */
    public function setReviewText($review_text): self
    {
        $this->review_text = $review_text;

        return $this;
    }

}

?>