<?php

class DatabaseConnector {

    private $dbConnection = null;

    public function __construct()
    {
        /* Env variables */
        $HOST = $_ENV['DB_HOST'];
        $PORT = $_ENV['DB_PORT'];
        $DB   = $_ENV['DB_DATABASE'];
        $USER = $_ENV['DB_USERNAME'];
        $PASS = $_ENV['DB_PASSWORD'];

        /* Try to connect to database with .env variables */
        try {
            $this->dbConnection = new \PDO(
                "mysql:host=$HOST;port=$PORT;charset=utf8mb4;dbname=$DB",
                $USER,
                $PASS
            );
        } catch (\PDOException $e) {
            /* Catch error and valuables informations if connection failed */
            exit($e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->dbConnection;
    }
}