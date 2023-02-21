<?php

include_once('./db/db.php');
include_once('./functions/functions.php');
include_once('./classes/classes.php');

header('Content-type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $product = $_GET['product'];
    switch ($product) {
        case $product:
            $result = [];
            $products = get_products_by_podcategory($connect, $product);
            foreach ( $products as $el) {
                $prod = new Product(
                    $el[0],
                    $el[1],
                    $el[2],
                    $el[3],
                    $el[4],
                    $el[5],
                    $el[6],
                    $el[7],
                    $el[8],
                    $el[9],
                    $el[10]
                );
                $result[] = $prod;
            }
            echo json_encode($result);
            break;

        default:

            break;
    }
}
