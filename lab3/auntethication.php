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
            <li class="nav__item"><a href=<?php
                    $name = 'Главная'; 
                    $link = 'index.php ';
                    echo $link;
                    echo 'class="nav__link"'; ?>><?php echo $name ?></a></li>
                <li class="nav__item"><a href=<?php 
                    $name = 'Обратная связь'; 
                    $link = 'feedback.php ';
                    echo $link;
                     echo 'class="nav__link"'; ?>><?php echo $name ?></a></li>
                <li class="nav__item"><a href=<?php $current_page3 = true; 
                    $name = 'Авторизация'; 
                    $link = 'auntethication.php ';
                    if ($current_page3) echo $link;
                    echo 'class="current__page"'; ?>><?php echo $name ?></a></li>
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