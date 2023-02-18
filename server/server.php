<?php

session_start();

include_once('./db/db.php');
include_once('./functions/functions.php');
include_once('./classes/classes.php');

if($_SERVER['REQUEST_METHOD']){
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST':

            if(!check_email($_POST['email'])){
                $_SESSION["error"] = 'Не корректный email';
                break;
            }

            if(!check_password($_POST['password'], $_POST['password2'])){
                $_SESSION["error"] = 'Пароли не совпадают!';
                break;
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
                    $_POST['email'],
                    $pass_hash,
                );

                add_user($new_user, $connect);

                $_SESSION["name"] = $new_user->email;
                $_SESSION["message"] = 'Регистрация прошла успешно!';

                header('Location: ../index.php');
            } else {
                $_SESSION["error"] = $email_have;
            }

            break;

        case 'GET':
            
            break;
        
        default:
            
            break;
    }
}

?>