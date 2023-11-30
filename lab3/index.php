<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'script.php'?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle1;?></title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header class="header">
        <div class="header__title">Мой Снежок</div>
        <nav class="header__nav nav">
            <ul class="nav__body">
            <li class="nav__item"><a href=<?php $current_page1 = true; 
                    $name = 'Главная'; 
                    $link = 'index.php ';
                    if ($current_page1) echo $link;
                    echo 'class="current_page"'; ?>><?php echo $name ?></a></li>
                <li class="nav__item"><a href=<?php
                    $name = 'Обратная связь'; 
                    $link = 'feedback.php ';
                    echo $link;
                    echo 'class="nav__link"'; ?>><?php echo $name ?></a></li>
                <li class="nav__item"><a href=<?php
                    $name = 'Авторизация'; 
                    $link = 'auntethication.php ';
                    echo $link;
                    echo 'class="nav__link"'; ?>><?php echo $name ?></a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <section class="main-section">
            <div class="header__title"> Оценка Снежка </div>
            <ul>
                <?php foreach($listItems as $item) {
                    echo "<li>$item</li>";
                }
                    ?>
            </ul>

            <img class="main-section__img" src="<?php echo $nameImage1; ?>" alt="">
            <img class="main-section__img" src="<?php echo $nameImage2; ?>" alt="">
        </section>
    </main>
    <footer class="footer">
        <div class="footer__info">
            <p class="info__mail">Почта: snejok_kot@gmail.com</p>
            <p class="info__phone">Телефон: +79031842826</p>
            <p class="timeLabel"> Сформировано: <?php echo $currentDateTime ?></p>
        </div>
    </footer>
</body>
</html>