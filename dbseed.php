<?php

include('./src/Manager/UserManager.php');
require 'bootstrap.php';

$userManager = new UserManager($dbConnection);

$result = $userManager->findById(1);
var_dump($result);