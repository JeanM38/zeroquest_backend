<?php

require_once('./src/Manager/Manager.php');

class CreationManager extends Manager {

    /**
     * Get every user entries
     */
    public function findAll() {
        $stmt = "SELECT * FROM creations;";

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
        $stmt = "SELECT * FROM creations WHERE id = ?;";

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