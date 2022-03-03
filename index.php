<?php
/* DB connection */
require_once "./bootstrap.php";

/* Controllers */
require_once("./src/Controller/UserController.php");
require_once("./src/Controller/PatchNoteController.php");
require_once("./src/Controller/FaqItemController.php");
require_once("./src/Controller/ReviewController.php");
require_once("./src/Controller/CreationController.php");
require_once("./src/Controller/CharacterController.php");

/* Access configuration */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

/* Get uri args */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

/* By default controller does not exists and id is null */
$controller = null;
$id = null;

/* If uri[2] is assigned, set $userId */
if (isset($uri[2])) {
    $id = (int) $uri[2];
}

// all endpoints exclude base -> "/"
// everything else results in a 404 Not Found
switch ($uri[1]) {
    case 'user':
        // pass the request method and user ID to the PersonController
        $controller = new UserController($dbConnection, $_SERVER["REQUEST_METHOD"], $id);
        break;
    case 'patchnote':
        $controller = new PatchNoteController($dbConnection, $_SERVER["REQUEST_METHOD"], $id);
        break;
    case 'faqitem':
        // $controller = new FaqItemController($dbConnection, $_SERVER["REQUEST_METHOD"], $id);
        break;
    case 'review':
        // $controller = new ReviewController($dbConnection, $_SERVER["REQUEST_METHOD"], $id);
        break;
    case 'creation':
        // $controller = new CreationController($dbConnection, $_SERVER["REQUEST_METHOD"], $id);
        break;
    case 'character':
        // $controller = new CharacterController($dbConnection, $_SERVER["REQUEST_METHOD"], $id);
        break;
    default:
        header("HTTP/1.1 404 Not Found");
        exit();
        break;
}

/* Process HTTP request */
$controller->processRequest();