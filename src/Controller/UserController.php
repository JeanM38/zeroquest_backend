<?php

require_once('./src/Models/User.php');
class UserController extends BaseController {

    public function processRequest()
    {
        /* Depends on HTTP request */
        switch ($this->requestMethod) {
            case 'GET':
                /* User want a specific user or every users */
                $response = $this->id ? $this->getById($this->id) : $this->getAll($this->type);
                break;
            case 'POST':
                /* Create a new user */
                $response = $this->createUserFromRequest();
                break;
            case 'PUT':
                /* Update an existing user */
                $response = $this->updateUserFromRequest($this->id);
                break;
            case 'DELETE':
                /* Delete an existing user */
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

    private function createUserFromRequest()
    {
        $data = json_decode(file_get_contents("php://input"), true);
        $user = new User(
            null,
            $data['pseudo'],
            $data['email'],
            $data['password']
        );

        /* Check validity of data */
        if (
            !$this->validateUser($user) ||
            (
                count($this->userManager->findBy($user->pseudo, 'pseudo')) > 0 ||
                count($this->userManager->findBy($user->email, 'email')) > 0
            )
        ) {
            return $this->unprocessableEntityResponse();
        } else {
            /* Call insert query */
            $this->userManager->insert($user);
            $response['status_code_header'] = 'HTTP/1.1 201 Created';
            $response['body'] = null;
            return $response;
        }
    }

    private function updateUserFromRequest($id)
    {
        /* Get specific user */
        $userJSON = $this->manager->findBy($id, 'id');

        /* 404 on unfound user */
        if (!$userJSON) {
            return $this->notFoundResponse();
        }

        /* Get new user data from request */
        $data = json_decode(file_get_contents('php://input'), TRUE);

        $user = new User(
            null,
            $data['pseudo'],
            $data['email'],
            $data['password'],
            $data['time_played'],
            $data['gold_earned'],
            $data['completed_chapters']
        );

        /* New user data is not valid */
        if (!$this->validateUser($user)) {
            /* Return unprocessable reponse */
            return $this->unprocessableEntityResponse();
        }

        /* Update existing user */
        $this->manager->update($id, $user);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = null;

        return $response;
    }

    private function validateUser($input)
    {
        /* Validate fields */
        if (
            !isset($input->pseudo)   || 
            !isset($input->email)    ||
            !isset($input->password)
        ) {
            return false;
        }

        return true;
    }
} 