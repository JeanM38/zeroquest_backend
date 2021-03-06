<?php

class NewsManager extends BaseManager {

    /**
     * Create a new news  entry
     */
    public function insert(object $data) {
        $stmt = "
            INSERT INTO news
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
     * Update a news entry
     */
    public function update($id, object $data)
    {        
        $stmt = "
            UPDATE news
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
}