<?php

require_once 'Character.php';

class Player extends Character {
    public function __construct(
        $name, 
        $type, 
        $description, 
        $attack, 
        $defense, 
        $movement, 
        $health, 
        $spirit, 
        $spells, 
        $moved, 
        $equipement, 
        $treasures, 
        $gold
    ) {
        parent::__construct($name, $type, $description, $attack, $defense, $movement, $health, $spirit, $spells, $moved);
        $this->equipement = $equipement;
        $this->treasures = $treasures;
        $this->gold = $gold;
    }

    /**
     * Get the value of equipement
     */ 
    public function getEquipement()
    {
        return $this->equipement;
    }

    /**
     * Set the value of equipement
     *
     * @return  self
     */ 
    public function setEquipement($equipement)
    {
        $this->equipement = $equipement;

        return $this;
    }

    /**
     * Get the value of treasures
     */ 
    public function getTreasures()
    {
        return $this->treasures;
    }

    /**
     * Set the value of treasures
     *
     * @return  self
     */ 
    public function setTreasures($treasures)
    {
        $this->treasures = $treasures;

        return $this;
    }

    /**
     * Get the value of gold
     */ 
    public function getGold()
    {
        return $this->gold;
    }

    /**
     * Set the value of gold
     *
     * @return  self
     */ 
    public function setGold($gold)
    {
        $this->gold = $gold;

        return $this;
    }
}