<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
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
        <p>Регистрация</p>
        </div>
    </div>
    <form class="form" action="signin.php" method="post">
        <input class="input" type="text" name="login" id="login" placeholder="Ваше имя">
        <input class="input" type="password" name="pass" id="pass" placeholder="Пароль">
        <button class="btn" type="submit">Регистрация</button>
      </form>

      