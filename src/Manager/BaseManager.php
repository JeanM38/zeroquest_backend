<?php

class BaseManager {
    protected $db = null;
    protected string $table_name;

    public function __construct($db, $table_name)
    {
        $this->db = $db;
        $this->table_name = $table_name;
    }

    /**
     * Get every entries of a table
     */
    public function findAll() {
        $stmt = "SELECT * FROM " . $this->table_name . ";";

        try {
            $stmt = $this->db->query($stmt);
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    /**
     * Get a specific entry of a table by id
     */
    public function findBy(int $id) {
        $stmt = "SELECT * FROM " . $this->table_name . " WHERE id = ?;";

        try {
            $stmt = $this->db->prepare($stmt);
            $stmt->execute([$id]);
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }

    /**
     * Delete a specific entry
     */
    public function delete($id)
    {
        $stmt = "DELETE FROM " . $this->table_name . " WHERE id = :id;";

        try {
            $stmt = $this->db->prepare($stmt);
            $stmt->execute(['id' => $id]);

            return $stmt->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }
}