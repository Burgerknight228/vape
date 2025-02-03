<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Dany online</title>
</head>
<body>
    <header>
                <div class="navbar">
                    <div class="nav-menu">
                        <div class="logo">
                            <img src="/images/logo.png">
                        </div>
                        <div class="menu">
                            <a href="/index.php">Главная</a>
                            <a href="/catalog-main.php">Каталог</a>
                            <a href="/contacts.php">Контакты</a>
                            <a href="/garantia.php">Гарантия</a>
                        </div>
                        <div class="icons">
                            <a href="#"><img src="/images/backet.jpg" id="basket"></a>
                            <a href="profile.php"><img src="/images/profile.png" id="profile"></a>
                        </div>
                    </div>
                </div>
    </header>

                        <div class="popular-product">
                            <div class="popular-text">
                            <p>Популярные товары</p>
                            </div>
                        </div>
    
        <div class="catalog-body"> 
                        <div class="product">
                        <a href="odnorazki-catalog.php">Одноразовые устройства</a>
                        <hr>
                        <a href="vape-catalog.php">Вейпы</a>
                        <hr>
                        <a href="zhidkosti-catalog.php">Жидкости</a>
                        <hr>
                        <a href="kompletk-catalog.php">Комплектующие</a>
                        </div>

                        
                        <div class="controls">
                            <div class="slide_arrows">
                                <img src="/images/leftafrrow.jpg" id="leftBtn">
                            </div>
                            <div class="slider">
                                <div class="gallery">
                                    <span onclick="window.location='https://example.com';">
                                        <img src="/images/geekvapeWenax-Turquise.jpg">
                                        <p>Geek Vape Wenax Q Mini - Turquoise</p>
                                        <p>1890 руб.</p>
                                        <p1>В наличии</p1>
                                        <div class="price">
                                            <p>Подробнее>></p>
                                        </div>
                                    </span>
                                    <span onclick="window.location='https://example.com';">
                                        <img src="/images/geekvapeAegisHeroQ-Rainbow.jpg">
                                        <p>Geek Vape Aegis Hero Q - Rainbow</p>
                                        <p>2650 руб.</p>
                                        <p1>В наличии</p1>
                                        <div class="price">
                                            <p>Подробнее >></p>
                                        </div>
                                    </span>
                                    <span onclick="window.location='product.html';">
                                        <img src="/images/geekvapeHero2-silver.png">
                                        <p>Geek Vape Aegis Hero 2 - Silver</p>
                                        <p>3390 руб.</p>
                                        <p1>В наличии</p1>
                                        <div class="price">
                                            <p>Подробнее>></p>
                                        </div>
                                    </span>
                                </div>
                                <div class="gallery">
                                    
                                    <span onclick="window.location='https://example.com';">
                                        <img src="/images/GeekbarPulse12000-watermelonIce.jpg">
                                        <p>Geekbare Pulse 12000 - Watermelon</p>
                                        <p>2250 руб.</p>
                                        <p1>В наличии</p1>
                                        <div class="price">
                                            <p>Подробнее>></p>
                                        </div>
                                    </span>
                                    <span onclick="window.location='https://example.com';">
                                        <img src="/images/geekvapeAegisnano2-dark.jpg">
                                        <p>Geek Vape Aegis Nano 2 - Dark</p>
                                        <p>1890 руб.</p>
                                        <p1>В наличии</p1>
                                        <div class="price">
                                            <p>Подробнее>></p>
                                        </div>
                                    </span>
                                    <span onclick="window.location='https://example.com';">
                                        <img src="/images/Vaporesso-Dojo-Opal-7000-blueRazzberryl.jpg">
                                        <p>Air Max 90 Black Mesh Swoosh</p>
                                        <p>1390 руб.</p>
                                        <p2>Нет в наличии</p2>
                                        <div class="price">
                                            <p>Подробнее>></p>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="slide_arrows">
                                <img src="/images/rightarrow.jpg" id="rightBtn">
                            </div>
                        </div>-
        </div>


</body>
<footer class="footer">
    <div class="footer-content">
        <!-- Company Info Section -->
        <div class="footer-section">
            <h3>О компании</h3>
            <p>Краткое описание компании</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Quick Links Section -->
        <div class="footer-section">
            <h3>Быстрые ссылки</h3>
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>

        <!-- Contact Info Section -->
        <div class="footer-section">
            <h3>Контакты</h3>
            <p>Email: info@example.com</p>
            <p>Телефон: +7 (999) 123-45-67</p>
            <p>Адрес: ул. Примерная, 122</p>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="footer-bottom">
        <p>&copy; 2025 Название компании. Все права защищены.</p>
    </div>
</footer>
</html>
<script>
    let horisontalScroll = document.querySelector('.slider');
    let leftBtn = document.getElementById('leftBtn');
    let rightBtn = document.getElementById('rightBtn');

    rightBtn.addEventListener('click', ()=>{
        horisontalScroll.style.scrollBehavior = "smooth";
        horisontalScroll.scrollLeft += 355;
    });

    leftBtn.addEventListener('click', ()=>{
        horisontalScroll.style.scrollBehavior = "smooth";
        horisontalScroll.scrollLeft -= 355;
    });
  </script>