<?php

session_start();

include_once('../db/db.php');
include_once('../functions/functions.php');
include_once('../classes/classes.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!check_passwords($_POST['password'], $_POST['password2'])){
        $_SESSION["error"] = 'Пароли не совпадают!';
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '');
    }

    if(check_reliability_password($_POST['password']) == 0){
        $_SESSION["error"] = 'Пароль должен быть не менее 8 символов.';
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '');
    }

    $hash = $_POST['hash'];
    $new_pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
    if(change_password($connect, $hash, $new_pass) == 1){
        $_SESSION["message"] = 'Пароль изменен успешно!';
    } else {
        $_SESSION["error"] = 'Что-то пошло не так, попробуйте позже.';
    }
    header('Location: ../../login/login.php');
}