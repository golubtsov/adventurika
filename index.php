<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Туристический магазин | Адвентурика</title>

    <link type="image/x-icon"  href="/images/favicon/favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="/style/header.css">
    <link rel="stylesheet" href="/style/card_prod.css">
    <link rel="stylesheet" href="/style/main.css">
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
                <li class="nav-item"><a href="/catalog/catalog.php" class="nav-link">Каталог</a>
                </li>
                <li class="nav-item"><a href="/about/about.php" class="nav-link">О мгагзине</a></li>
                <!-- <li class="nav-item"><a href="" class="nav-link">Корзина</a></li> -->
                <li class="nav-item"><a href="/login/login.php" class="nav-link">Вход</a></li>
            </ul>
        </nav>
        <ul class="nav-items adapt">
            <li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
            <li class="nav-item"><a href="/catalog/catalog.php" class="nav-link">Каталог</a></li>
            <li class="nav-item"><a href="/about/about.php" class="nav-link">О мгагзине</a></li>
            <!-- <li class="nav-item"><a href="/basket/basket.php" class="nav-link">Корзина</a></li> -->
            <li class="nav-item"><a href="/login/login.php" class="nav-link">Вход</a></li>
        </ul>
        <!-- header.css -->

        <div class="content">

            <div class="container">

                <div class="blc-banner">
                    <div class="blc-banner-title-main">
                        <h1 class="banner-title-main">
                            Интернет-магазин<br>
                            <span>туристического снаряжения</span><br>
                            <span>и товаров для охоты и рыбалки</span>
                        </h1>
                    </div>
                    <div class="blc-banner-titles">
                        <div class="blc-banner-title">
                            <h2 class="banner-title">
                                Большой ассортимент<br>
                                <span>в том числе уникальные товары</span>
                            </h2>
                        </div>
                        <div class="blc-banner-title">
                            <h2 class="banner-title">
                                100% оригинальные товары<br>
                                <span>Работаем напрямую с производителями</span>
                            </h2>
                        </div>
                        <div class="blc-banner-title">
                            <h2 class="banner-title">
                                Доставка по ВСЕЙ России<br>
                                <span>Даже в труднодоступные регионы</span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="blc-title-prod">
                    <div class="title-prod">
                        <h1 class="text-title-prod">Популярные товары</h1>
                    </div>
                </div>

                <div class="blc-title-prod">
                    <div class="title-prod">
                        <h1 class="text-title-prod">Наша доставка - это</h1>
                    </div>
                </div>

                <div class="blc-benefits">
                    <div class="list-benefits">
                        <ul>
                            <li class="item-benefit">
                                <div class="icon-benefit">
                                    <ion-icon name="bag-outline"></ion-icon>  
                                </div>
                                <span class="text-benefit">Бесплатная доставка от 7 000 рублей</span>
                            </li>
                            <li class="item-benefit">
                                <div class="icon-benefit">
                                    <ion-icon name="mail-outline"></ion-icon>
                                </div>
                                <span class="text-benefit">Быстрый и удобный возврат</span>
                            </li>
                            <li class="item-benefit">
                                <div class="icon-benefit">
                                    <ion-icon name="calendar-number-outline"></ion-icon>
                                </div>
                                <span class="text-benefit">Быстрая и удобная доставка</span>
                            </li>
                            <li class="item-benefit">
                                <div class="icon-benefit">
                                    <ion-icon name="alert-circle-outline"></ion-icon>
                                </div>
                                <span class="text-benefit">Надежная техподдержка</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="blc-title-prod">
                    <div class="title-prod">
                        <h1 class="text-title-prod">Новинки</h1>
                    </div>
                </div>

                <div class="blc-card-prod">
                    <div class="blc-img-prod">
                        <img src="https://www.kant.ru/upload/resize_cache/iblock/1be/224_176_1/1bed7755c8a485172c23a0a2a3f5c398.jpg" class="img-prod" alt="">
                    </div>
                    <div class="blc-popular-prod">
                        <ul class="raiting">
                            <li class="item-star"><ion-icon name="star" class="star"></ion-icon></li>
                            <li class="item-star"><ion-icon name="star" class="star"></ion-icon></li>
                            <li class="item-star"><ion-icon name="star" class="star"></ion-icon></li>
                            <li class="item-star"><ion-icon name="star" class="star"></ion-icon></li>
                            <li class="item-star"><ion-icon name="star" class="star"></ion-icon></li>
                        </ul>
                    </div>
                    <div class="blc-name-prod">
                        <a class="link-title-prod">
                            <span>Палатка BTrace 2023 Glade 3</span>
                        </a>
                    </div>
                    <div class="blc-price-prod">
                        <span class="text-price">3220 &#8381;</span>
                    </div>
                    <div class="blc-btn-add">
                        <button class="btn-add">Смотреть</button>
                    </div>
                    <div class="blc-btn-add">
                        <button class="btn-save">Сохранить</button>
                    </div>
                </div>

            </div>

        </div>

        <footer>
            <div class="blc-footer">
                <ul class="list-footer-items">
                    <li class="list-footer-item">© Адвентурика</li>
                    <li class="list-footer-item"><a href="" class="link-footer">8 (800) 444-61-57</a></li>
                    <li class="list-footer-item"><a href="" class="link-footer">adventurica@gmail.com</a></li>
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

    <script src="/script/index.js"></script>

</body>
</html>