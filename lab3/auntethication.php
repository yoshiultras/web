<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'script.php'?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle3;?></title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header class="header">
        <div class="header__title">Мой Снежок</div>
        <nav class="header__nav nav">
            <ul class="nav__body">
                <li class="nav__item"><a class="nav__link" href="index.php">Главная</a></li>
                <li class="nav__item"><a class="nav__link" href="feedback.php">Обратная связь</a></li>
                <li class="nav__item"><a href="auntethication.php"<?php $current_page3 = true; if ($current_page3) echo 'class="current__page"'; ?>>Авторизация</a></li>
                <li class="nav__item"><a class="nav__link" href="">Достижения снежка</a></li>
            </ul>
        </nav>
    </header>
    <div class="form__container">
        <form action="https://www.httpbin.org/post" method="post" aria-placeholder="выберите тип обращения">
            <label for="login">Логин</label>
            <input type="text" name="login" id="login">

            <label for="password">Пароль</label>
            <input type="password" name="password" id="password">
            

            <input type="checkbox" id="remember" value="remember" name="remember"><label for="checkbox">Запомнить меня</label>

            <button type="submit">Отправить</button>
        </form>
    </div>
    <footer class="footer">
        <div class="footer__info">
            <p class="info__mail">Почта: snejok_kot@gmail.com</p>
            <p class="info__phone">Телефон: +79031842826</p>
            <p class="timeLabel"> Сформировано: <?php echo $currentDateTime ?></p>
        </div>
    </footer>
</body>