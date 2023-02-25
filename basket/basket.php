<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>

    <link type="image/x-icon" href="/images/favicon/favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="/style/header.css">
    <link rel="stylesheet" href="/style/basket.css">
    <link rel="stylesheet" href="/style/footer.css">

</head>

<body>
    <div class="wrapper">

        <!-- header.css -->
        <div class="blc-black-line">
        <?php
            if ($_SESSION['name']) {
                echo '<div class="blc-name-user">
                            <a href="/cabinet/cabinet.php" class="user-cabinet">
                                <div class="name-user">
                                    <ion-icon class="icon-name-user" name="log-out-outline"></ion-icon>
                                    <p>' . $_SESSION['name'] . '</p>
                                </div>
                            </a>
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
                        - через сайт - круглосуточно
                    </p>
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
                <li class="nav-item"><a href="/login/login.php" class="nav-link">Вход</a></li>
            </ul>
        </nav>
        <ul class="nav-items adapt">
            <li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
            <li class="nav-item"><a href="/catalog/catalog.php" class="nav-link">Каталог</a></li>
            <li class="nav-item"><a href="/about/about.php" class="nav-link">О мгагзине</a></li>
            <li class="nav-item"><a href="/login/login.php" class="nav-link">Вход</a></li>
        </ul>
        <!-- header.css -->

        <div class="content">
            <div class="blc-basket-wrapper">
                <form class="form-oder">
                    <div class="blc-basket-content">
                        <div class="blc-title-basket">
                            <h2 class="title-basket">Корзина</h2>
                        </div>
                        <hr>
                        <div class="blc-products">
                            <p>Здесь еще ничего нет.</p>
                        </div>
                    </div>
                    <div class="blc-altogether-price">
                        <h3 class="altogether-price">Всего: <span name="all_price">0</span> руб.</h3>
                    </div>
                    <div class="blc-form-oder">
                        <h3 class="ttile-form">Выбирите пункт выдачи:</h3>
                        <p class="item-adres"><input type="checkbox" name="adres" id="Алтайский край, Барнаул, улица Малахова, 65"> Алтайский край, Барнаул, улица Малахова, 65</p>
                        <p class="item-adres"><input type="checkbox" name="adres" id="Алтайский край, Барнаул, проспект Ленина, 87А"> Алтайский край, Барнаул, проспект Ленина, 87А</p>
                        <p class="item-adres"><input type="checkbox" name="adres" id="Алтайский край, Барнаул, Социалистический проспект, 29"> Алтайский край, Барнаул, Социалистический проспект, 29</p>
                        <button class="btn-create-oder">Оформить заказ</button>
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8d971ea008102fbfa0e5aa2e436f77bd4090f336000fdd26895bcf0b5f967baa&amp;width=100%25&amp;height=250&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </form>
            </div>
        </div>

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

    <script type="module" src="../script/basket/basket.js"></script>

</body>

</html>