<?php

require_once('./config.php');

try {
    // Post informations
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Get all similar usernames
    $nameCheckQuery = "SELECT * FROM players WHERE username ='" . $username . "';";
    
    // Error Code #2 -> Query failed
    $nameCheck = $db->query($nameCheckQuery) or die("2: Name check query failed");

    if ($nameCheck->rowCount() != 1) {
        die("5");
    }

    $existingUser = $nameCheck->fetch();
    $salt = $existingUser["salt"];
    $hash = $existingUser["hash"];

    $loginHash = crypt($password, $salt);

    if($hash != $loginHash) {
        // Error code #6 -> password does not hash to match table
        die("6");
    } else {
        die("0");
    }
}
catch (PDOException $e) {
    // Error Code #1 -> Db connection failed
    die("1: Connection failed");
}