<?php

class FaqItemManager {

    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Get every faq entries
     */
    public function findAll() {
        $stmt = "SELECT * FROM faqitems;";

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
        $stmt = "SELECT * FROM faqitems WHERE id = ?;";
        
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