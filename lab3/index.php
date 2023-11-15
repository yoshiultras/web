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
                <li class="nav__item"><a href="index.php" <?php $current_page1 = true; if ($current_page1) echo 'class="current__page"'; ?>>Главная</a></li>
                <li class="nav__item"><a class="nav__link" href="feedback.php">Обратная связь</a></li>
                <li class="nav__item"><a class="nav__link" href="auntethication.php">Авторизация</a></li>
                <li class="nav__item"><a class="nav__link" href="">Достижения снежка</a></li>
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