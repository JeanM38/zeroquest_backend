<?php

class Spell {
    public function __construct($name, $element, $type, $thrown)
    {
        $this->name = $name;
        $this->element = $element;
        $this->type = $type;
        $this->thrown = $thrown;
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
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of element
     */ 
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Set the value of element
     *
     * @return  self
     */ 
    public function setElement($element)
    {
        $this->element = $element;

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
     * Get the value of thrown
     */ 
    public function getThrown()
    {
        return $this->thrown;
    }

    /**
     * Set the value of thrown
     *
     * @return  self
     */ 
    public function setThrown($thrown)
    {
        $this->thrown = $thrown;

        return $this;
    }
}