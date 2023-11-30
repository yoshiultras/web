<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'script.php'?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle2;?></title>
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
                <li class="nav__item"><a href=<?php $current_page2 = true; 
                    $name = 'Обратная связь'; 
                    $link = 'feedback.php ';
                    echo $link;
                    if ($current_page2) echo 'class="current__page"'; ?>><?php echo $name ?></a></li>
                <li class="nav__item"><a href=<?php
                    $name = 'Авторизация'; 
                    $link = 'auntethication.php ';
                    echo $link;
                    echo 'class="nav__link"'; ?>><?php echo $name ?></a></li>
            </ul>
        </nav>
    </header>
    <div class="form__container">
        <form action="https://www.httpbin.org/post" method="post">
            <label for="FIO">Имя</label>
            <input type="text" name="FIO" id="FIO">

            <label for="mail">Email</label>
            <input type="email" name="email" id="mail">
            
            <label for="from" style="display: block; margin-top: 2vh;">Как вы узнали о нас</label>
            <input type="radio" value="fromSearch" name="findOut" id="fromSearch"><label for="fromSearch">Из поиска</label>
            <input type="radio" value="fromAd" name="findOut" id="fromAd"><label for="fromAd">Из рекламы</label>

            <label for="appealType" style="display: block; margin-top: 2vh;">Тип обращения</label>
            <select name="appealType" id="appealType">
                <option value="complaint">Жалоба</option>
                <option value="suggestion">Предложение</option>
            </select>

            <label for="textOfAppeal">Текст обращения</label>
            <textarea name="textOfAppeal" id="textOfAppeal" cols="20" rows="1"></textarea>

            <input type="file" name="file" id="file">

            <input type="checkbox" id="approval" value="approval" name="approval"><label for="checkbox">Даю согласие на обработку персональных данных</label>

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
</html>