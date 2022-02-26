<?php
    /* Use connector class */
    require_once("./src/Database/DatabaseConnector.php");
    require 'vendor/autoload.php';

    /* Load .env variables */
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    /* Create connection */
    $dbConnection = ( new DatabaseConnector())->getConnection();

