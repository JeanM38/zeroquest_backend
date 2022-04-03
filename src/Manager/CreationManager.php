<?php

class CreationManager extends BaseManager {
    /**
     * Create a new creation entry
     */
    public function insert(object $data) {
        $stmt = "
            INSERT INTO creations
                (author_id, title, private, description, notes, created_at, updated_at, enemies, traps, doors, spawns, furnitures)
            VALUES
                (:author_id, :title, :private, :description, :notes, :created_at, :updated_at, :enemies, :traps, :doors, :spawns, :furnitures);
        ";

        try {
            $stmt = $this->db->prepare($stmt);
            $stmt->execute([
                'author_id' => $data->author_id,
                'title' => $data->title,
                'private'  => $data->private,
                'description' => $data->description,
                'notes' => $data->notes,
                'created_at' => $data->created_at,
                'updated_at' => $data->updated_at,
                'enemies' => $data->enemies,
                'traps' => $data->traps,
                'doors' => $data->doors,
                'spawns' => $data->spawns,
                'furnitures' => $data->furnitures,
            ]);

            return $stmt->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }

    public function findBy(int $id) {
        $stmt = "
            SELECT `title`,`private`,`description`,`notes`,`created_at`,`updated_at`,`enemies`,`traps`,`doors`,`spawns`,`spawns`, `furnitures`,`pseudo` 
            FROM `creations` 
            INNER JOIN users ON users.id = creations.author_id
            WHERE creations.id = " . $id . "   
        ";

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