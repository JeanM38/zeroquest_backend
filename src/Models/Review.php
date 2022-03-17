<?php

class Review {
    public ?int $id;
    public int $user_id;
    public int $creation_id;
    public string $title;
    public string $comment;

    public function __construct(
        ?int $id = null,
        int $user_id,
        int $creation_id,
        string $title,
        string $comment
    )
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->creation_id = $creation_id;
        $this->title = $title;
        $this->comment = $comment;
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
     * Get the value of comment
     */ 
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     *
     * @return  self
     */ 
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }
}