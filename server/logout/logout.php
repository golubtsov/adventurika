<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    session_unset();
    header('Location: ../../index.php');
}