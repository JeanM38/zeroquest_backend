<?php

require_once('./src/Manager/Manager.php');

class UserManager extends Manager {

    /**
     * Get every user entries
     */
    public function findAll() {
        $stmt = "SELECT * FROM users;";

        try {
            $stmt = $this->db->query($stmt);
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    /**
     * Get a specific entry by field
     */
    public function findBy($id, string $type) {
        $stmt = "SELECT * FROM users WHERE " . $type . " = ?;";

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
     * Create a new user entry
     */
    public function insert(object $data) {
        $stmt = "
            INSERT INTO users
                (pseudo, email, password)
            VALUES
                (:pseudo, :email, :password);
        ";

        try {
            $stmt = $this->db->prepare($stmt);
            $stmt->execute([
                'pseudo' => $data->pseudo,
                'email' => $data->email,
                'password' => $data->password
            ]);

            return $stmt->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }

    /**
     * Update an user entry
     */
    public function update($id, object $data)
    {        
        $stmt = "
            UPDATE users
            SET 
                pseudo = :pseudo,
                email  = :email,
                password = :password,
                time_played = :time_played,
                gold_earned = :gold_earned,
                completed_chapters = :completed_chapters
            WHERE id = :id;
        ";

        try {
            $stmt = $this->db->prepare($stmt);
            $stmt->execute([
                'id' => (int) $id,
                'pseudo' => $data->pseudo,
                'email' => $data->email,
                'password'  => $data->password,
                'time_played' => $data->time_played ?? 0,
                'gold_earned' => $data->gold_earned ?? 0,
                'completed_chapters' => $data->completed_chapters ?? 0,
            ]);
            return $stmt->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }

    /**
     * Delete a specific user entry
     */
    public function delete($id)
    {
        $stmt = "
            DELETE FROM users
            WHERE id = :id;
        ";

        try {
            $stmt = $this->db->prepare($stmt);
            $stmt->execute(['id' => $id]);

            return $stmt->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }
}