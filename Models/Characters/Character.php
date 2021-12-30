<?php

class Character {
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
        $moved
    )
    {
        $this->name = $name;
        $this->type = $type;
        $this->description = $description;
        $this->attack = $attack;
        $this->degense = $defense;
        $this->movement = $movement;
        $this->health = $health;
        $this->spirit = $spirit;
        $this->spells = $spells;
        $this->moved = $moved;
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
         * Get the value of attack
         */ 
        public function getAttack()
        {
                return $this->attack;
        }

        /**
         * Set the value of attack
         *
         * @return  self
         */ 
        public function setAttack($attack)
        {
                $this->attack = $attack;

                return $this;
        }

        /**
         * Get the value of defense
         */ 
        public function getDefense()
        {
                return $this->defense;
        }

        /**
         * Set the value of defense
         *
         * @return  self
         */ 
        public function setDefense($defense)
        {
                $this->defense = $defense;

                return $this;
        }

        /**
         * Get the value of movement
         */ 
        public function getMovement()
        {
                return $this->movement;
        }

        /**
         * Set the value of movement
         *
         * @return  self
         */ 
        public function setMovement($movement)
        {
                $this->movement = $movement;

                return $this;
        }

        /**
         * Get the value of health
         */ 
        public function getHealth()
        {
                return $this->health;
        }

        /**
         * Set the value of health
         *
         * @return  self
         */ 
        public function setHealth($health)
        {
                $this->health = $health;

                return $this;
        }

        /**
         * Get the value of spirit
         */ 
        public function getSpirit()
        {
                return $this->spirit;
        }

        /**
         * Set the value of spirit
         *
         * @return  self
         */ 
        public function setSpirit($spirit)
        {
                $this->spirit = $spirit;

                return $this;
        }

        /**
         * Get the value of spells
         */ 
        public function getSpells()
        {
                return $this->spells;
        }

        /**
         * Set the value of spells
         *
         * @return  self
         */ 
        public function setSpells($spells)
        {
                $this->spells = $spells;

                return $this;
        }

        /**
         * Get the value of moved
         */ 
        public function getMoved()
        {
                return $this->moved;
        }

        /**
         * Set the value of moved
         *
         * @return  self
         */ 
        public function setMoved($moved)
        {
                $this->moved = $moved;

                return $this;
        }
}