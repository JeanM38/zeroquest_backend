<?php

require_once('./Database/config.php');

try {
    // Post informations
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Get all similar usernames
    $nameCheckQuery = "SELECT username FROM players WHERE username ='" . $username . "';";
    
    // Error Code #2 -> Query failed
    $nameCheck = $db->query($nameCheckQuery) or die("2: Name check query failed");

    if ($nameCheck->rowCount() > 0) {
        // Error Code #3 -> Username already exists in the database
         die("3: Name already exists");
    } else {
        // Create secured salt and hash
        $salt = "\$5\$rounds=5000\$" . "ldonrm667" . $username . "\$";
        $hash = crypt($password, $salt);
        
        // Insert user query
        $insertUserQuery = "INSERT INTO players(username, hash, salt) VALUES ('" . $username . "', '" . $hash . "', '" . $salt . "');";
        
        // Insert user or Error Code #4
        $db->query($insertUserQuery) or die("4: Insert player query failed");
        
        // Unity/C# will knows query succeed
        echo("0");
    }
}
catch (PDOException $e) {
    // Error Code #1 -> Db connection failed
    die("1: Connection failed");
}