<?php

class Controller {
    public $db;
    public $manager;

    /* Request data */
    public $requestMethod;
    public $id;

    public function __construct($db, $requestMethod, $id, $manager)
    {
        $this->db = $db;
        $this->requestMethod = $requestMethod;
        $this->id = $id;
        $this->manager = $manager;
    }

    protected function unprocessableEntityResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 422 Unprocessable Entity';

        $response['body'] = json_encode([
            'error' => 'Invalid input'
        ]);

        return $response;
    }

    protected function notFoundResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = [];

        return $response;
    }
}