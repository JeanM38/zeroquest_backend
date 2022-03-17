<?php

class PatchNote {
    public ?int $id;
    public float $version;
    public int $publication_date;
    public int $updated_at;
    public string $bodytext;
    public string $type;

    public function __construct(
        ?int $id = null,
        float $version,
        int $publication_date,
        int $updated_at,
        string $bodytext,
        string $type
    )
    {
        $this->id = $id;
        $this->version = $version;
        $this->publication_date = $publication_date;
        $this->updated_at = $updated_at;
        $this->bodytext = $bodytext;
        $this->type = $type;
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

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}