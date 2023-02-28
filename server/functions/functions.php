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
    $sql = "INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `email`, `pass`) VALUES ($user->id,'$user->fname','$user->lname', $user->phone,'$user->email','$user->password');";
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

// ========== ФУНКЦИИ ДЛЯ ПОЛУЧЕНИЕЯ ТОВАРОВ ИЗ БД ==========

function get_products_by_podcategory($connect, $prod){
    $sql = "SELECT * FROM products WHERE podcategory = '$prod'";
    $data = mysqli_query($connect, $sql);
    $data = mysqli_fetch_all($data);
    return $data;
}

function get_all_products($connect, $limit, $offset){
    $sql = "SELECT * FROM products LIMIT $limit OFFSET $offset";
    $data = mysqli_query($connect, $sql);
    $data = mysqli_fetch_all($data);
    return $data;
}

// ========== ФУНКЦИИ ДЛЯ ПОЛУЧЕНИЕЯ ТОВАРОВ ПО ID ИЗ БД ==========

function get_product_by_id($connect, $id){
    $sql = "SELECT * FROM products WHERE id = '$id'";
    $data = mysqli_query($connect, $sql);
    $data = mysqli_fetch_all($data);
    return $data[0];
}

// ========== ФУНКЦИИ ДЛЯ СОЗДАНИЯ ЗАКАЗА И ЗАНЕСЕНИЯ ЕГО В БД

// разбиваем заказ на отдельные продукты, добавляем к этому данные пользователя и записываем в бд
function send_oder($connect, $oder){
    $sql = "INSERT INTO `oders`(`num_oder`, `user_email`, `prod_id`, `prod_name`, `prod_count`, `price`, `adres`, `status`) VALUES ($oder->num_oder, '$oder->email_user', $oder->id_prod, '$oder->name_prod', $oder->count_prod, $oder->price, '$oder->adres', 'active')";
    mysqli_query($connect, $sql);
}

function create_num_oder(){
    return rand(100000, 999999);
}

function get_active_oders_user($connect, $email){
    $ressult = [];
    $sql = "SELECT * FROM oders WHERE status = 'active' AND user_email = '$email'";
    $data = mysqli_query($connect, $sql);
    foreach(mysqli_fetch_all($data) as $el){
        $ressult[] = $el;
    }
    return $ressult;
}

function get_noactive_oders_user($connect, $email){
    $ressult = [];
    $sql = "SELECT * FROM oders WHERE status = 'noactive' AND user_email = '$email'";
    $data = mysqli_query($connect, $sql);
    foreach(mysqli_fetch_all($data) as $el){
        $ressult[] = $el;
    }
    return $ressult;
}

// ========== ФУНКЦИИ ДЛЯ ПОЛУЧЕНИЯ ТОВАРОВ ДЛЯ СЛАЙДЕРА

function get_prod_popular($connect, $count){
    $ressult = [];
    $sql = "SELECT * FROM products WHERE popular = 5 LIMIT $count";
    $data = mysqli_query($connect, $sql);
    foreach ($data as $el) {
        $ressult[] = $el;
    }
    return $ressult;
}

function get_prod_new($connect, $count){
    $ressult = [];
    $sql = "SELECT * FROM products WHERE new_prod = true LIMIT $count";
    $data = mysqli_query($connect, $sql);
    foreach ($data as $el) {
        $ressult[] = $el;
    }
    return $ressult;
}

// ФУНКЦИИ ДЛЯ ВОССТАНОВЛЕНИЯ ПАРОЛЯ

function get_hash_password($connect, $email){
    $sql = "SELECT pass FROM users WHERE email = '$email'";
    $hash = mysqli_query($connect, $sql);
    return mysqli_fetch_row($hash);
}

function change_password($connect, $hash, $new_pass){
    $sql = "UPDATE users SET pass = '$new_pass' WHERE pass = '$hash';";
    if(mysqli_query($connect, $sql)){
        return true;
    }
}
