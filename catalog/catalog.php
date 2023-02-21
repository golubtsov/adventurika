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
    <link rel="stylesheet" href="/style/catalog.css">
    <link rel="stylesheet" href="/style/card_prod.css">
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

        <div class="blc-podcatalog">
            <div class="blc-lists-podcatalog">
                <ul class="list-podcatalog">
                    <span>Туризм</span>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="palatki" class="link-podcatalog">Палатки</a></li>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="spalniki" class="link-podcatalog">Спальники</a></li>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="rukzaki" class="link-podcatalog">Рюкзаки</a></li>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="covriki" class="link-podcatalog">Коврики</a></li>
                </ul>
                <ul class="list-podcatalog">
                    <span>Одежда</span>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="costums" class="link-podcatalog">Костюмы</a></li>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="obuv" class="link-podcatalog">Обувь</a></li>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="tolstovki" class="link-podcatalog">Толстовки</a></li>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="perchatki" class="link-podcatalog">Перчатки</a></li>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="curtki" class="link-podcatalog">Куртки</a></li>
                </ul>
                <ul class="list-podcatalog">
                    <span>Снаряжение</span>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="termoses" class="link-podcatalog">Термосы</a></li>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="nozhi" class="link-podcatalog">Ножи</a></li>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="fonari" class="link-podcatalog">Фонари</a></li>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="vyzhivanie" class="link-podcatalog">Выживание</a></li>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="medecina" class="link-podcatalog">Медицина</a></li>
                </ul>
                <ul class="list-podcatalog">
                    <span>Зимнее</span>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="zimpalatki" class="link-podcatalog">Зимние палатки</a></li>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="lyzhi" class="link-podcatalog">Лыжи, снегоступы</a></li>
                    <li class="item-podcatalog"><a href="#" data-podcatalog="pechi" class="link-podcatalog">Печки</a></li>
                </ul>
            </div>
            <div class="blc-btn-podcatalog">
                <div class="btn-podcatalog">
                    <ion-icon id="list-outline" name="list-outline"></ion-icon>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container">

                <div class="blc-products">
                    <div class="blc-filtr">
                        <div class="blc-title-filtr">
                            <h3 class="title-filtr">Фильтры</h3>
                        </div>
                        <form method="POST" name="filtr" class="form-filtr">
                            <select name="mobile-sort" id="mobile-sort">
                                <option value="popular">Популярное</option>
                                <option value="cheap">Сначала дешевле</option>
                                <option value="expensive">Сначала дороже</option>
                                <option value="new">Новинки</option>
                            </select>

                            <h4>Пол</h4>
                            <select name="gender" id="gender">
                                <option value="gender">Любой</option>
                                <option value="man">Мужской</option>
                                <option value="woman">Женский</option>
                            </select>

                            <h4>Цена</h4>
                            <div class="blc-interval">
                                <span class="sign-input"><input name="from" type="text" placeholder="от"></span>
                                <span class="sign-input"><input name="to" type="text" placeholder="до"> руб</span>
                            </div>

                            <button type="submit">Применить</button>
                        </form>
                    </div>

                    <div class="blc-window-products">
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
                            <!-- <div class="blc-btn-add">
                                <button class="btn-save">Сохранить</button>
                            </div> -->
                        </div>
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

    
    <!-- подключение библиотеки c иконками https://ionic.io/ionicons/usage -->
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <script src="/script/menu.js"></script>
    <script src="/script/catalog/catalog.js"></script>
</body>
</html>