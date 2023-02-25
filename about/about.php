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

    <link type="image/x-icon" href="/images/favicon/favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="/style/header.css">
    <link rel="stylesheet" href="/style/about.css">
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
            <li class="nav-item"><a href="" class="nav-link">О мгагзине</a></li>
            <li class="nav-item"><a href="" class="nav-link">Корзина</a></li>
            <li class="nav-item"><a href="" class="nav-link">Вход</a></li>
        </ul>
        <!-- header.css -->

        <div class="content">
            <div class="blc-info-magazine">
                <div class="blc-title">
                    <h2 class="title-contacts">Контакты</h2>
                </div>
                <div class="blc-info-grid">
                    <div class="blc-info internet-magazine">
                        <div class="blc-title">
                            <h3 class="title-contacts">Интенет-магазин</h3>
                        </div>
                        <p>Звоните нам:<br>
                            <a href="#" class="phone">8 (800) 444-61-57</a> (ежедневно с <b>9:00 до 21:00</b>)
                        </p>
                        <p>Пишите нам в чаты:<br>
                            <b>Whatsapp</b>, <b>ВКонтакте</b> (ежедневно с <b>9:00 до 21:00</b>)<br>
                            <span>
                                <a href="" class="whatsapp"><ion-icon name="logo-whatsapp"></ion-icon></a>
                                <a href="" class="vk"><ion-icon name="logo-vk"></ion-icon></a>
                            </span>
                        </p>
                        <p>Пишите на на почту:<br>
                            <a href="#" class="pohta">adventurica@gmail.com</a>
                        </p>
                    </div>
                    <div class="blc-info punkt-magazine">
                        <div class="blc-title">
                            <h3 class="title-contacts">Адреса, пункты выдачи</h3>
                        </div>
                        <div class="blc-adresa">
                            <ul class="list-adresa">
                                <li class="item-adres">Алтайский край, Барнаул, улица Малахова, 65</li>
                                <li class="item-adres">Алтайский край, Барнаул, проспект Ленина, 87А</li>
                                <li class="item-adres">Алтайский край, Барнаул, Социалистический проспект, 29</li>
                            </ul>
                            <div class="carta">
                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8d971ea008102fbfa0e5aa2e436f77bd4090f336000fdd26895bcf0b5f967baa&amp;width=90%25&amp;height=250&amp;lang=ru_RU&amp;scroll=true"></script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blc-title">
                    <h2 class="title-contacts">Гарнтии</h2>
                </div>
                <div class="blc-info-grid">
                    <div class="blc-info">
                        <div class="blc-title">
                            <h3 class="title-contacts">В случае обнаружения брака</h3>
                        </div>
                        <p>На все представленные в нашем каталоге товары распространяется гарантия производителей 1 год</p>
                        <p>Если в течение этого времени обнаружится брак товара, мы вернем вам его стоимость.</p>
                    </div>
                    <div class="blc-info">
                        <div class="blc-title">
                            <h3 class="title-contacts">В случае если товар вам не подошел</h3>
                        </div>
                        <b>
                            <p>Вы можете вернуть товар или обменять его на другой в течение 14 дней!</p>
                        </b>

                        <p>Согласно закону о защите прав потребителя, возврат или обмен товара надлежащего качества возможен при условии сохранения комплектации, товарного вида изделия и товарного вида упаковки. Товар не должен иметь следов эксплуатации.</p>

                        <p><b>Не подлежит возврату:</b><br>
                            Нижнее бельё, в том числе термобельё и носки
                        </p>

                        <p>Пожалуйста, сохраняйте чеки на покупки!</p>

                        <p></p>
                    </div>
                </div>
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

</body>

</html>