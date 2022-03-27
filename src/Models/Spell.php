<?php

class Spell {
    public ?int $id;
    public string $label;
    public string $description;
    public string $media_path;
    public int $type;

    public function __construct(
        ?int $id,
        string $label,
        string $description,
        string $media_path,
        int $type
    )
    {
        $this->id = $id;
        $this->label = $label;
        $this->description = $description;
        $this->media_path = $media_path;
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
     * Get the value of label
     */ 
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */ 
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of media_path
     */ 
    public function getMedia_path()
    {
        return $this->media_path;
    }

    /**
     * Set the value of media_path
     *
     * @return  self
     */ 
    public function setMedia_path($media_path)
    {
        $this->media_path = $media_path;

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