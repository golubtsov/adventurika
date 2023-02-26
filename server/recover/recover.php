<?php

session_start();

include_once('../db/db.php');
include_once('../functions/functions.php');
include_once('../classes/classes.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (count(get_users_email($connect)) != 0) {
        $user = get_users_email($connect)[0][0];
        $hash = get_hash_password($connect, $user)[0];
        $header = 'Восстановление пароля';
        $headers = "Content-type: text/plain; charset=utf-8 \r\n";
        $msg = 'Чтобы поменять пароль для входа в личный кабинет интернет-магазина "Адвентурика", перейдите по этой ссылке http://adventurika/login/new_pass.php?hash=' . $hash . '';
        mail($user, $header, $msg, $headers);
    }
    $_SESSION['error'] = 'Вам на электронную почту отправлено письмо с ссылкой для восстановления пароля.';
    header('Location: ../../login/recover.php');
}
