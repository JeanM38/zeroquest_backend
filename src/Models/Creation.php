<?php

class Creation {
    public ?int $id;
    public string $title;
    public bool $private;
    public int $author_id;
    public string $description;
    public string $notes;
    public int $created_at;
    public int $updated_at;
    public string $enemies;
    public string $traps;
    public string $doors;
    public string $spawns;
    public string $furnitures;

    public function __construct(
        ?int $id = null,
        string $title,
        bool $private,
        int $author_id,
        string $description,
        string $notes,
        int $created_at,
        int $updated_at,
        string $enemies,
        string $traps,
        string $doors,
        string $spawns,
        string $furnitures
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->private = $private;
        $this->author_id = $author_id;
        $this->description = $description;
        $this->notes = $notes;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->enemies = $enemies;
        $this->traps = $traps;
        $this->doors = $doors;
        $this->spawns = $spawns;
        $this->furnitures = $furnitures;
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
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of private
     */ 
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set the value of private
     *
     * @return  self
     */ 
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Get the value of author_id
     */ 
    public function getAuthor_id()
    {
        return $this->author_id;
    }

    /**
     * Set the value of author_id
     *
     * @return  self
     */ 
    public function setAuthor_id($author_id)
    {
        $this->author_id = $author_id;

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
     * Get the value of notes
     */ 
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set the value of notes
     *
     * @return  self
     */ 
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

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
     * Get the value of enemies
     */ 
    public function getEnemies()
    {
        return $this->enemies;
    }

    /**
     * Set the value of enemies
     *
     * @return  self
     */ 
    public function setEnemies($enemies)
    {
        $this->enemies = $enemies;

        return $this;
    }

    /**
     * Get the value of traps
     */ 
    public function getTraps()
    {
        return $this->traps;
    }

    /**
     * Set the value of traps
     *
     * @return  self
     */ 
    public function setTraps($traps)
    {
        $this->traps = $traps;

        return $this;
    }

    /**
     * Get the value of doors
     */ 
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * Set the value of doors
     *
     * @return  self
     */ 
    public function setDoors($doors)
    {
        $this->doors = $doors;

        return $this;
    }

    /**
     * Get the value of spawns
     */ 
    public function getSpawns()
    {
        return $this->spawns;
    }

    /**
     * Set the value of spawns
     *
     * @return  self
     */ 
    public function setSpawns($spawns)
    {
        $this->spawns = $spawns;

        return $this;
    }

    /**
     * Get the value of furnitures
     */ 
    public function getFurnitures()
    {
        return $this->furnitures;
    }

    /**
     * Set the value of furnitures
     *
     * @return  self
     */ 
    public function setFurnitures($furnitures)
    {
        $this->furnitures = $furnitures;

        return $this;
    }
}