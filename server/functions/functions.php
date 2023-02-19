<?php

// ========== ФУНКЦИИ ДЛЯ РЕГИСТРАЦИИ ==========

// ф-ия проверяет корректность email
function check_email($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// ф-ия проверяет совпадение паролей
function check_passwords($pass1, $pass2){
    if ($pass1 == $pass2) {
        return true;
    }
    return false;
}

// ф-ия проверяет надежность пароля
function check_reliability_password($pass){
    if(strlen($pass) < 8){
        return false;
    }
    return true;
}

// ф-ия получает email всех зарегистрированных пользовательей
function get_users_email($connect){
    $data = mysqli_query($connect, "SELECT email FROM users");
    $emails = mysqli_fetch_all($data);
    return $emails;
}

// ф-ия проверяет есть такой email в бд или нет
function have_email($emails, $email){
    for ($i = 0; $i < count($emails); $i++) {
        for ($k = 0; $k < count($emails[$i]); $k++) {
            if ($emails[$i][$k] == $email) {
                return 'Пользователь с таким Email уже существует.';
                break;
            }
        }
    }
    return true;
}

// ф-ия добавляет пользователя в бд
function add_user($user, $connect){
    $sql = "INSERT INTO `users`(`id`, `fname`, `lname`, `email`, `pass`) VALUES ($user->id,'$user->fname','$user->lname','$user->email','$user->password');";
    mysqli_query($connect, $sql);
}

// ========== ФУНКЦИИ ДЛЯ ВХОДА ==========

// ф-ия получает проверяет есть зарегистрированный пользователь с таким email или нет
function get_user_by_email($connect, $el){
    $sql = "SELECT email, pass FROM users WHERE email = '$el'";
    $data = mysqli_query($connect, $sql);
    $data = mysqli_fetch_all($data);
    return $data;
}

// ф-ия расшифровывает пароль из бд
function hash_password($pass, $hash){
    return password_verify($pass, $hash);
}