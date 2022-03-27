<?php

require_once('./src/Models/Newws.php');

class NewsController extends BaseController {

    public function processRequest()
    {
        /* Depends on HTTP request */
        switch ($this->requestMethod) {
            case 'GET':
                /* User want a specific new or every news */
                $response = $this->id ? $this->getById($this->id) : $this->getAll($this->type);
                break;
            case 'POST':
                /* Create a new news */
                $response = $this->createNewsFromRequest();
                break;
            case 'PUT':
                /* Update an existing news */
                $response = $this->updateNewsFromRequest($this->id);
                break;
            case 'DELETE':
                /* Delete an existing news */
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

    private function createNewsFromRequest()
    {
        $currentDate = new DateTime();
        $currentDate = $currentDate->getTimestamp();

        $newsJSON = json_decode(file_get_contents("php://input"), true);

        $news = new News(
            null,
            $newsJSON['version'],
            $currentDate,
            $currentDate,
            $newsJSON['bodytext'],
            $newsJSON['type']
        );

        /* Check validity of data */
        if ( false
            // !$this->validateNews($news) &&
            // count($this->newsManager->findById($this->newsId)) > 0
        ) {
            return $this->unprocessableEntityResponse();
        } else {
            /* Call insert query */
            $this->manager->insert($news);
            $response['status_code_header'] = 'HTTP/1.1 201 Created';
            $response['body'] = null;
            return $response;
        }
    }

    private function updateNewsFromRequest($id)
    {
        $currentDate = new DateTime();
        $currentDate = $currentDate->getTimestamp();

        /* Get specific news */
        $newsJSON = $this->manager->findById($id);

        /* 404 on unfound news */
        if (!$newsJSON) {
            return $this->notFoundResponse();
        }

        /* Get new news data from request */
        $data = json_decode(file_get_contents('php://input'), TRUE);

        $news = new News(
            null,
            $data['version'],
            $data['publication_date'],
            $currentDate,
            $data['bodytext'],
            $data['type']
        );

        /* New news data is not valid */
        // if (!$this->validateNews($news)) {
        //     /* Return unprocessable reponse */
        //     return $this->unprocessableEntityResponse();
        // }

        /* Update existing news */
        $this->manager->update($id, $news);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = null;

        return $response;
    }

    // private function validateNews($input)
    // {
    //     /* Validate fields */
    //     if (
    //         !isset($input->pseudo)   || 
    //         !isset($input->email)    ||
    //         !isset($input->password)
    //     ) {
    //         return false;
    //     }

    //     return true;
    // }
} 