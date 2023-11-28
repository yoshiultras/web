<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "db.php";
        $resultImg = mysqli_query($mysql, "SELECT * FROM `images`");
        $result2 = mysqli_query($mysql, "SELECT * FROM `words`");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header class="header">
        <div class="header__title">Мой Снежок</div>
        <nav class="header__nav nav">
            <ul class="nav__body">
                <li class="nav__item"><a class="nav__link" href="index.php">Главная</a></li>
                <li class="nav__item"><a class="nav__link" href="index.php">Обратная связь</a></li>
                <li class="nav__item"><a class="nav__link" href="index.php">Авторизация</a></li>
                <li class="nav__item"><a class="nav__link" href="index.php">Достижения снежка</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <section class="main-section">
            <div class="header__title"> Фото </div>
            <?php while($name = mysqli_fetch_assoc($resultImg)) { ?>
                    <div>
                        <img  title="<?php echo $name['name'];?>" src="<?php echo $name['img'];?>" />
                    </div>
                <?php
                }
            ?>
            <div class="header__title"> Определения </div>
            <table>
                <tr><th>1</th><th>2</th></tr>
                <?php while($name1 = mysqli_fetch_assoc($resultImg)) { ?>
                <tr><td><?php echo $name1['name'];?></td><td><?php echo $name1['expl'];?></td></tr>
                <?php } ?>
            </table>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__info">
            <p class="info__mail">Почта: snejok_kot@gmail.com</p>
            <p class="info__phone">Телефон: +79031842826</p>
        </div>
    </footer>
</body>
</html>