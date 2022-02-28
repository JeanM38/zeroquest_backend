<?php

class Character {

    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Get every character entries
     */
    public function findAll() {
        $stmt = "SELECT * FROM characters;";

        try {
            $stmt = $this->db->query($stmt);
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    /**
     * Get a specific entry by id
     */
    public function findById($id) {
        $stmt = "SELECT * FROM characters WHERE id = ?;";
        
        try {
            $stmt = $this->db->prepare($stmt);
            $stmt->execute([$id]);
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }
}