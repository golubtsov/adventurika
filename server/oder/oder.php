<?php

session_start();

include_once('../db/db.php');
include_once('../functions/functions.php');
include_once('../classes/classes.php');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if($_GET['session']){
        print_r($_SESSION['name']);
    }

    if($_GET['oder']){
        $user = $_SESSION['name'];
        $oder = (object) json_decode($_GET['oder']);
        $user_adres = $_GET['adres'];
        $num_oder = create_num_oder();
        
        foreach ($oder as $prod) {
            $elem = get_object_vars($prod);
            $new_oder = new Oder(
                $user,
                $num_oder,
                $elem['id'],
                $elem['name'],
                $elem['count'],
                $elem['count'] * $elem['price'],
                $user_adres
            );
            send_oder($connect, $new_oder);
        }

        print_r($num_oder);
    }
}
