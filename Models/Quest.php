<?php

class Quest {
    public function __construct($title, $description, $objectives, $notes, $items, $enemies, $rewards, $doors)
    {
        $this->title = $title;
        $this->description = $description;
        $this->objectives = $objectives;
        $this->notes = $notes;
        $this->items = $items;
        $this->enemies = $enemies;
        $this->rewards = $rewards;
        $this->doors = $doors;
    }

    /**
     * Get the value of rewards
     */ 
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * Set the value of rewards
     *
     * @return  self
     */ 
    public function setRewards($rewards)
    {
        $this->rewards = $rewards;

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
     * Get the value of objectives
     */ 
    public function getObjectives()
    {
        return $this->objectives;
    }

    /**
     * Set the value of objectives
     *
     * @return  self
     */ 
    public function setObjectives($objectives)
    {
        $this->objectives = $objectives;

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
     * Get the value of items
     */ 
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the value of items
     *
     * @return  self
     */ 
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }
}