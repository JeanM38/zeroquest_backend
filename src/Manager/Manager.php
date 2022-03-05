<?php

class Manager {
    protected $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }
}