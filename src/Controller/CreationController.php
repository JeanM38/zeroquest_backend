<?php

require_once('./src/Models/Creation.php');

class CreationController extends BaseController {
    public function processRequest()
    {
        /* Depends on HTTP request */
        switch ($this->requestMethod) {
            case 'GET':
                /* creation want a specific creation or every creations */
                $response = $this->id ? $this->getById($this->id) : $this->getAll($this->type);
                break;
            case 'POST':
                /* Create a new creation */
                $response = $this->createCreationFromRequest();
                break;
            case 'PUT':
                /* Update an existing creation */
                $response = $this->updateCreationFromRequest($this->id);
                break;
            case 'DELETE':
                /* Delete an existing creation */
                $response = $this->delete($this->id);
                break;
            default:
                /* Return a 404 page on unavailable HTTP method */
                $response = $this->notFoundResponse();
                break;
        }

        header($response['status_code_header']);

        if ($response['body']) {
            echo $response['body'];
        }
    }

    private function createCreationFromRequest()
    {
        $data = json_decode(file_get_contents("php://input"), true);
        $creation = new Creation(
            null,
            $data['title'],
            $data['privateC'],
            $data['author_id'],
            $data['description'],
            $data['notes'],
            $data['created_at'],
            $data['updated_at'],
            $data['enemies'],
            $data['traps'],
            $data['doors'],
            $data['spawns'],
            $data['furnitures']
        );

        $result = $this->manager->insert($creation);

        if ($result === 1) {
            $response['status_code_header'] = 'HTTP/1.1 201 Created';
            $response['body'] = null;
        } else {
            $response = $this->alreadyExistsResponse();
        }
        
        return $response;
    }
}