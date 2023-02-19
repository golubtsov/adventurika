<?php

use function PHPSTORM_META\type;

session_start();

include_once('../db/db.php');
include_once('../functions/functions.php');
include_once('../classes/classes.php');

$email;
$password;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

?>