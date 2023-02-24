<?php

session_start();

include_once('../db/db.php');
include_once('../functions/functions.php');
include_once('../classes/classes.php');

$email;
$password;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = get_user_by_email($connect, $email);
    if(count($user) == 0){
        $_SESSION['error'] = 'Неправильный логин или пароль.';
        header('Location: ../../login/login.php');
    }

    if(password_verify($password, $user[0][1])){
        $_SESSION['name'] = $email;
        setcookie('email', $_POST['email'], 0, '/');
        header('Location: ../../index.php');
    } else {
        $_SESSION['error'] = 'Неправильный логин или пароль.';
        header('Location: ../../login/login.php');
    }
}

?>