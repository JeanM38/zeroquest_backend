<?php

class Item {
    public function __construct(
        $type, 
        $posX, 
        $posY, 
        $width, 
        $direction, 
        $reward = null, 
        $isOpened = null)
    {
        $this->type = $type;
        $this->posX = $posX;
        $this->posY = $posY;
        $this->width = $width;
        $this->direction = $direction;
        $this->reward = $reward;
        $this->isOpened = $isOpened;
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

    /**
     * Get the value of posX
     */ 
    public function getPosX()
    {
        return $this->posX;
    }

    /**
     * Set the value of posX
     *
     * @return  self
     */ 
    public function setPosX($posX)
    {
        $this->posX = $posX;

        return $this;
    }

    /**
     * Get the value of posY
     */ 
    public function getPosY()
    {
        return $this->posY;
    }

    /**
     * Set the value of posY
     *
     * @return  self
     */ 
    public function setPosY($posY)
    {
        $this->posY = $posY;

        return $this;
    }

    /**
     * Get the value of orientation
     */ 
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Set the value of orientation
     *
     * @return  self
     */ 
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
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
     * Get the value of isOpened
     */ 
    public function getIsOpened()
    {
        return $this->isOpened;
    }

    /**
     * Set the value of isOpened
     *
     * @return  self
     */ 
    public function setIsOpened($isOpened)
    {
        $this->isOpened = $isOpened;

        return $this;
    }
}