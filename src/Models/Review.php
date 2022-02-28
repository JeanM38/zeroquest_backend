<?php

class Review {
    public ?int $id;
    public int $user_id;
    public int $creation_id;
    public bool $upvote;

    public function __construct(
        ?int $id = null,
        int $user_id,
        int $creation_id,
        bool $upvote
    )
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->creation_id = $creation_id;
        $this->upvote = $upvote;
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
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of creation_id
     */ 
    public function getCreation_id()
    {
        return $this->creation_id;
    }

    /**
     * Set the value of creation_id
     *
     * @return  self
     */ 
    public function setCreation_id($creation_id)
    {
        $this->creation_id = $creation_id;

        return $this;
    }

    /**
     * Get the value of upvote
     */ 
    public function getUpvote()
    {
        return $this->upvote;
    }

    /**
     * Set the value of upvote
     *
     * @return  self
     */ 
    public function setUpvote($upvote)
    {
        $this->upvote = $upvote;

        return $this;
    }
}