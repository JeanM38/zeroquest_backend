<?php

class PatchNoteManager {

    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Get every patch_note entries
     */
    public function findAll() {
        $stmt = "SELECT * FROM patch_notes;";

        try {
            $stmt = $this->db->query($stmt);
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    /**
     * Get a specific patch_note entry by id
     */
    public function findById($id) {
        $stmt = "SELECT * FROM patch_notes WHERE id = ?;";
        
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
     * Create a new patch_note entry
     */
    public function insert(object $data) {
        $stmt = "
            INSERT INTO patch_notes
                (version, publication_date, updated_at, bodytext)
            VALUES
                (:version, :publication_date, :updated_at, :bodytext);
        ";

        try {
            $stmt = $this->db->prepare($stmt);
            $stmt->execute([
                'version' => $data->version,
                'publication_date' => $data->publication_date,
                'updated_at' => $data->updated_at,
                'bodytext' => $data->bodytext
            ]);

            return $stmt->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }

    /**
     * Update a patch_note entry
     */
    public function update($id, object $data)
    {        
        $stmt = "
            UPDATE patch_notes
            SET 
                updated_at = :updated_at,
                bodytext = :bodytext,
            WHERE id = :id;
        ";

        try {
            $stmt = $this->db->prepare($stmt);
            $stmt->execute([
                'id' => (int) $id,
                'updated_at' => $data->updated_at,
                'bodytext'  => $data->bodytext
            ]);
            return $stmt->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }

    /**
     * Delete a specific patch_note entry
     */
    public function delete($id)
    {
        $stmt = "
            DELETE FROM patch_notes
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