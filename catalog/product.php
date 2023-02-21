<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О мгагзине</title>

    <link type="image/x-icon"  href="/images/favicon/favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="/style/header.css">
    <link rel="stylesheet" href="/style/card_prod.css">
    <!-- <link rel="stylesheet" href="/style/main.css"> -->
    <link rel="stylesheet" href="/style/product.css">
    <link rel="stylesheet" href="/style/footer.css">
    
</head>
<body>
    <div class="wrapper">

        <!-- header.css -->
        <div class="blc-black-line">
        <?php 
                if($_SESSION['name']){
                    echo '<div class="blc-name-user">
                            <div class="name-user">
                                <ion-icon class="icon-name-user" name="log-out-outline"></ion-icon>
                                <p>' . $_SESSION['name'] . '</p>
                            </div>
                        </div>';
                }
            ?>
        </div>
        <header>
            <div class="head-container">
                <div class="blc-logo">
                    <a href="/" class="link-logo">
                        <img src="/images/logo/logo.png" alt="Туристический магазин | Карабин" class="img-logo">
                    </a>
                </div>
                <div class="blc-phone">
                    <a href="#" class="link-phone">8 (800) 444-61-57</a>
                </div>
                <div class="blc-about-oder">
                    <p class="text-about-oder">
                        Прием заказов
                        <br>
                        - по телефону - ежедневно 9:00-21:00
                        <br>
                        - через сайт - круглосуточно</p>
                </div>
                <div class="blc-basket">
                    <a href="/basket/basket.php" class="link-basket">
                        <div class="blc-img-basket">
                            <img src="/images/icon/basket.png" alt="Корзина Карабин" class="img-basket">
                        </div>
                        <div class="text-link-basket">Корзина</div>
                    </a>
                </div>
            </div>
        </header>
        <nav>
            <div class="btn-adapt-menu">
                <div class="item-line"></div>
                <div class="item-line"></div>
                <div class="item-line"></div>
            </div>
            <ul class="nav-items">
                <li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
                <li class="nav-item"><a href="/catalog/catalog.php" class="nav-link">Каталог</a></li>
                <li class="nav-item"><a href="/about/about.php" class="nav-link">О мгагзине</a></li>
                <!-- <li class="nav-item"><a href="/basket/basket.php" class="nav-link">Корзина</a></li> -->
                <li class="nav-item"><a href="/login/login.php" class="nav-link">Вход</a></li>
            </ul>
        </nav>
        <ul class="nav-items adapt">
            <li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
            <li class="nav-item"><a href="/catalog/catalog.php" class="nav-link">Каталог</a></li>
            <li class="nav-item"><a href="" class="nav-link">О мгагзине</a></li>
            <li class="nav-item"><a href="" class="nav-link">Корзина</a></li>
            <li class="nav-item"><a href="" class="nav-link">Вход</a></li>
        </ul>
        <!-- header.css -->

        <div class="content">

            <div class="main-blc-product">
                <div class="blc-images">
                    <div class="blc-min-images">
                        <img src="https://adventurica.ru/media/thumbnail/product/2014/2014_7_250x250.jpg" alt="" class="mini-img">
                        <img src="https://adventurica.ru/media/thumbnail/product/2014/2014_7_250x250.jpg" alt="" class="mini-img">
                        <img src="https://adventurica.ru/media/thumbnail/product/2014/2014_7_250x250.jpg" alt="" class="mini-img">
                    </div>
                    <div class="blc-main-img">
                        <img src="https://adventurica.ru/media/thumbnail/product/2014/2014_7_250x250.jpg" alt="" class="main-img">
                    </div>
                </div>
                <div class="blc-info-prod">
                    <div class="blc-title-name-prod">
                        <h1 class="title-namr-prod">Палатка</h1>
                    </div>
                    <div class="blc-code-prod">
                        <span class="mini-blc-code-prod">Код товара: 2345</span>
                    </div>
                    <div class="blc-add-basket">
                        <button class="btn-add-basket">В корзину</button>
                    </div>
                    <div class="blc-description">
                        <h2 class="title-description">Характеристики</h2>
                        <ul class="list-desc">
                            <li>
                                <p>боковые карманы с изменяемым объёмом</p>
                            </li>
                            <li>
                                <p>плавающий клапан с объёмным карманом</p>
                            </li>
                            <li>
                                <p>тубус с затяжкой для увеличения объёма</p>
                            </li>
                            <li>
                                <p>ручки для переноски</p>
                            </li>
                            <li>
                                <p>дополнительные точки навески</p>
                            </li>
                            <li>
                                <p>дополнительные точки навески</p>
                            </li>
                            <li>
                                <p>дополнительные точки навески</p>
                            </li>
                            <li>
                                <p>дополнительные точки навески</p>
                            </li>
                            <li>
                                <p>дополнительные точки навески</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- "Назначение - трекинговый,Конструкция - анатомический,Объём - 80 л,Пол - унисекс,Складной стул - нет,Грудная стяжка - да,Поясной ремень - да,Нижний вход - нет,Накидка от дождя - нет,Материал - PolyOxford 600D PU, Авизент 5020,Вес - 1.2 кг"

        "боковые карманы с изменяемым объёмом,плавающий клапан с объёмным карманом,тубус с затяжкой для увеличения объёма,ручки для переноски,дополнительные точки навески,вставки из пенополиэтилена в лямках, поясе и спинке,металлические силовые пряжки,анатомические S-образные лямки,длина боковых стяжек позволяет закрепить снаружи рюкзака дополнительное снаряжение" -->
        <footer>
            <div class="blc-footer">
                <ul class="list-footer-items">
                    <li class="list-footer-item">© Адвентурика</li>
                    <li class="list-footer-item"><a href="/" class="link-footer">8 (800) 444-61-57</a></li>
                    <li class="list-footer-item"><a href="/" class="link-footer">adventurica@gmail.com</a></li>
                </ul>

                <ul class="list-footer-items">
                    <li class="list-footer-item"><a href="/about/about.php" class="link-footer">Доставка и оплата</a></li>
                    <li class="list-footer-item"><a href="/about/about.php" class="link-footer">Гарантии</a></li>
                    <li class="list-footer-item"><a href="/about/about.php" class="link-footer">Контакты</a></li>
                </ul>

                <ul class="list-footer-items">
                    <span>Вы можете оплатить заказ:</span>
                    <li class="list-footer-item">Наличными</li>
                    <li class="list-footer-item">Картой при получении</li>
                    <li class="list-footer-item">По безналичному расчету</li>
                </ul>
            </div>
        </footer>
    </div>

    <script src="/script/menu.js"></script>

    <!-- подключение библиотеки c иконками https://ionic.io/ionicons/usage -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="../script/product/product.js"></script>

</body>
</html>