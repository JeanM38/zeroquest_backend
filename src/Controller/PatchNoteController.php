<?php

require_once('./src/Models/PatchNote.php');

class PatchNoteController extends BaseController {

    public function processRequest()
    {
        /* Depends on HTTP request */
        switch ($this->requestMethod) {
            case 'GET':
                /* User want a specific patchNote or every patchNotes */
                $response = $this->id ? $this->getById($this->id) : $this->getAll($this->type);
                break;
            case 'POST':
                /* Create a new patch_note */
                $response = $this->createPatchNoteFromRequest();
                break;
            case 'PUT':
                /* Update an existing patch_note */
                $response = $this->updatePatchNoteFromRequest($this->id);
                break;
            case 'DELETE':
                /* Delete an existing patch_note */
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

    private function createPatchNoteFromRequest()
    {
        $currentDate = new DateTime();
        $currentDate = $currentDate->getTimestamp();

        $patchNoteJSON = json_decode(file_get_contents("php://input"), true);

        $patchNote = new PatchNote(
            null,
            $patchNoteJSON['version'],
            $currentDate,
            $currentDate,
            $patchNoteJSON['bodytext'],
            $patchNoteJSON['type']
        );

        /* Check validity of data */
        if ( false
            // !$this->validatePatchNote($patchNote) &&
            // count($this->patchNoteManager->findById($this->patchNoteId)) > 0
        ) {
            return $this->unprocessableEntityResponse();
        } else {
            var_dump($patchNote);
            /* Call insert query */
            $this->manager->insert($patchNote);
            $response['status_code_header'] = 'HTTP/1.1 201 Created';
            $response['body'] = null;
            return $response;
        }
    }

    private function updatePatchNoteFromRequest($id)
    {
        $currentDate = new DateTime();
        $currentDate = $currentDate->getTimestamp();

        /* Get specific patch_note */
        $patchNoteJSON = $this->manager->findById($id);

        /* 404 on unfound patch_note */
        if (!$patchNoteJSON) {
            return $this->notFoundResponse();
        }

        /* Get new patch_note data from request */
        $data = json_decode(file_get_contents('php://input'), TRUE);

        $patchNote = new PatchNote(
            null,
            $data['version'],
            $data['publication_date'],
            $currentDate,
            $data['bodytext'],
            $data['type']
        );

        /* New patch_note data is not valid */
        // if (!$this->validatePatchNote($patchNote)) {
        //     /* Return unprocessable reponse */
        //     return $this->unprocessableEntityResponse();
        // }

        /* Update existing patch_note */
        $this->manager->update($id, $patchNote);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = null;

        return $response;
    }

    // private function validatePatchNote($input)
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