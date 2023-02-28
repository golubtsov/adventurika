<?php

session_start();

include_once('../db/db.php');
include_once('../functions/functions.php');
include_once('../classes/classes.php');

if($_SERVER['REQUEST_METHOD']){
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST':

            if(!check_email($_POST['email'])){
                $_SESSION["error"] = 'Не корректный email';
                break;
                header('Location: ../../login/signup.php');
            }

            if(!check_passwords($_POST['password'], $_POST['password2'])){
                $_SESSION["error"] = 'Пароли не совпадают!';
                break;
                header('Location: ../../login/signup.php');
            }

            if(check_reliability_password($_POST['password']) == 0){
                $_SESSION["error"] = 'Пароль должен быть не менее 8 символов.';
                break;
                header('Location: ../../login/signup.php');
            }

            // получаем все email из бд
            $emails = get_users_email($connect);
            // получаем кол-во пользователей на основе emails
            $count_users = count($emails);
            // проверяем совпадение указаного email с ранее записанными
            $email_have = have_email($emails, $_POST['email']);
            if($email_have == 1){

                $count_users++; // создаем уникальный id
                $pass_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

                $new_user = new New_User(
                    $count_users,
                    $_POST['fname'],
                    $_POST['lname'],
                    $_POST['phone'],
                    $_POST['email'],
                    $pass_hash,
                );

                add_user($new_user, $connect);
                $_SESSION["message"] = 'Регистрация прошла успешно!';
                header('Location: ../../login/signup.php');
            } else {
                $_SESSION["error"] = $email_have;
                header('Location: ../../login/signup.php');
            }

            break;
        
        default:
            $_SESSION["error"] = 'Что-то пошло не так! Попробуйте немного позже.';
            header('Location: ../../login/signup.php');
            break;
    }
}

?>