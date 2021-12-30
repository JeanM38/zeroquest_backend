<?php

class Door {
    public function __construct($front, $back, $isOpened)
    {
        $this->front = $front;
        $this->back = $back;
        $this->isOpened = $isOpened;
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

    /**
     * Get the value of back
     */ 
    public function getBack()
    {
        return $this->back;
    }

    /**
     * Set the value of back
     *
     * @return  self
     */ 
    public function setBack($back)
    {
        $this->back = $back;

        return $this;
    }

    /**
     * Get the value of front
     */ 
    public function getFront()
    {
        return $this->front;
    }

    /**
     * Set the value of front
     *
     * @return  self
     */ 
    public function setFront($front)
    {
        $this->front = $front;

        return $this;
    }
}