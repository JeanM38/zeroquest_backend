<?php

class User {

    public ?int $id;
    public string $pseudo;
    public string $email;
    public string $password;
    public ?int $time_played;
    public ?int $gold_earned;
    public ?int $completed_chapters;

    public function __construct(
        ?int $id = null, 
        string $pseudo, 
        string $email, 
        string $password,
        ?int $time_played = 0,
        ?int $gold_earned = 0,
        ?int $completed_chapters = 0
    ) {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->email = $email;
        $this->password = $password;
        $this->time_played = $time_played;
        $this->gold_earned = $gold_earned;
        $this->completed_chapters = $completed_chapters;
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
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of time_played
     */ 
    public function getTime_played()
    {
        return $this->time_played;
    }

    /**
     * Set the value of time_played
     *
     * @return  self
     */ 
    public function setTime_played($time_played)
    {
        $this->time_played = $time_played;

        return $this;
    }

    /**
     * Get the value of gold_earned
     */ 
    public function getGold_earned()
    {
        return $this->gold_earned;
    }

    /**
     * Set the value of gold_earned
     *
     * @return  self
     */ 
    public function setGold_earned($gold_earned)
    {
        $this->gold_earned = $gold_earned;

        return $this;
    }

    /**
     * Get the value of completed_chapters
     */ 
    public function getCompleted_chapters()
    {
        return $this->completed_chapters;
    }

    /**
     * Set the value of completed_chapters
     *
     * @return  self
     */ 
    public function setCompleted_chapters($completed_chapters)
    {
        $this->completed_chapters = $completed_chapters;

        return $this;
    }
}