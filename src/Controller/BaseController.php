<?php

class BaseController {
    public $manager;
    public $requestMethod;
    public $id;

    public function __construct($requestMethod, $id, $manager)
    {
        $this->requestMethod = $requestMethod;
        $this->id = $id;
        $this->manager = $manager;
    }

    /**
     * Returns every entries of a table
     */
    protected function getAll($type)
    {
        /* Get all users */
        $result = $this->manager->findAll($type);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);

        return $response;
    }

    /**
     * Find a specific entry by its ID
     */
    protected function getById($id)
    {
        /* Get specific entity */
        $result = $this->manager->findBy($id);

        /* 404 on unfound entity */
        if (count($result) === 0) {
            $response = $this->notFoundResponse();
        } else {
            $response['status_code_header'] = 'HTTP/1.1 200 OK';
            $response['body'] = json_encode($result);
        }
                    
        return $response;
    }

    /**
     * Delete a specific entry by its ID
     */
    protected function delete($id)
    {
        /* Get specific entry */
        $result = $this->manager->findBy($id);

        /* 404 on unfound entry */
        if (!$result) {
            return $this->notFoundResponse();
        }

        /* Delete specific entry */
        $this->manager->delete($id);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = null;

        return $response;
    }

    /**
     * If entity is unprocessable (not possible to modify those values)
     */
    protected function unprocessableEntityResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 422 Unprocessable Entity';

        $response['body'] = json_encode([
            'error' => 'Invalid input'
        ]);

        return $response;
    }

    /**
     * Entity not found
     */
    protected function notFoundResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = [];

        return $response;
    }
}