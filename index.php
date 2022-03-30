<?php
/* DB connection */
require_once "./bootstrap.php";

/* Controllers */
require_once("./src/Controller/BaseController.php"); # Base  
require_once("./src/Controller/UserController.php"); 
require_once("./src/Controller/NewsController.php");
require_once("./src/Controller/FaqItemController.php");
require_once("./src/Controller/ReviewController.php");
require_once("./src/Controller/CreationController.php");
require_once("./src/Controller/CharacterController.php");

/* Managers */
require_once('./src/Manager/BaseManager.php'); # Base
require_once('./src/Manager/UserManager.php'); 
require_once('./src/Manager/ReviewManager.php');
require_once('./src/Manager/NewsManager.php');
require_once('./src/Manager/FaqItemManager.php');
require_once('./src/Manager/CreationManager.php');
require_once('./src/Manager/CharacterManager.php');

/* Access configuration */
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");

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

    /* USER */
    case 'user':
        $manager = new UserManager($dbConnection, 'users');
        // pass the request method and user ID to the PersonController
        $controller = new UserController($_SERVER["REQUEST_METHOD"], $id, $manager);
        break;

    /* NEWS */
    case 'new':
        $manager = new NewsManager($dbConnection, 'news');
        $controller = new NewsController($_SERVER["REQUEST_METHOD"], $id, $manager);
        break;

    /* FAQITEM */
    case 'faqitem':
        $manager = new FaqItemManager($dbConnection, 'faqitems');
        $controller = new FaqItemController($_SERVER["REQUEST_METHOD"], $id, $manager);
        break;

    /* REVIEW */
    case 'review':
        $manager = new ReviewManager($dbConnection, 'reviews');
        $controller = new ReviewController($_SERVER["REQUEST_METHOD"], $id, $manager);
        break;

    /* CREATION */
    case 'creation':
        $manager = new CreationManager($dbConnection, 'creations');
        $controller = new CreationController($_SERVER["REQUEST_METHOD"], $id, $manager);
        break;

    /* CHARACTER */
    case 'character':
        $manager = new CharacterManager($dbConnection, 'characters');
        $controller = new CharacterController($_SERVER["REQUEST_METHOD"], $id, $manager);
        break;

    /* DEFAULT */
    default:
        header("HTTP/1.1 404 Not Found");
        exit();
        break;
}

/* Process HTTP request of the selected controller */
$controller->processRequest();