<?php

class PatchNote {
    public ?int $id;
    public int $version;
    public int $publication_date;
    public string $bodytext;

    public function __construct(
        ?int $id = null,
        int $version,
        int $publication_date,
        int $bodytext
    )
    {
        $this->id = $id;
        $this->version = $version;
        $this->publication_date = $publication_date;
        $this->bodytext = $bodytext;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of version
     */ 
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set the value of version
     *
     * @return  self
     */ 
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get the value of publication_date
     */ 
    public function getPublication_date()
    {
        return $this->publication_date;
    }

    /**
     * Set the value of publication_date
     *
     * @return  self
     */ 
    public function setPublication_date($publication_date)
    {
        $this->publication_date = $publication_date;

        return $this;
    }

    /**
     * Get the value of bodytext
     */ 
    public function getBodytext()
    {
        return $this->bodytext;
    }

    /**
     * Set the value of bodytext
     *
     * @return  self
     */ 
    public function setBodytext($bodytext)
    {
        $this->bodytext = $bodytext;

        return $this;
    }
}