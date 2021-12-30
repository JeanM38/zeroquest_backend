<?php

require_once 'Character.php';

class Enemy extends Character {
    public function __construct($name, $type, $description, $attack, $defense, $movement, $health, $spirit, $spells, $moved, $reward, $skin)
    {
        parent::__construct($name, $type, $description, $attack, $defense, $movement, $health, $spirit, $spells, $moved);
        $this->reward = $reward;
        $this->skin = $skin;
    }

    /**
     * Get the value of reward
     */ 
    public function getReward()
    {
        return $this->reward;
    }

    /**
     * Set the value of reward
     *
     * @return  self
     */ 
    public function setReward($reward)
    {
        $this->reward = $reward;

        return $this;
    }

    /**
     * Get the value of skin
     */ 
    public function getSkin()
    {
        return $this->skin;
    }

    /**
     * Set the value of skin
     *
     * @return  self
     */ 
    public function setSkin($skin)
    {
        $this->skin = $skin;

        return $this;
    }
}