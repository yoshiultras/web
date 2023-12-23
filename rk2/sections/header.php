<header class="header">
        <div class="header__logo">
            <a href="index.php"><img src="../img/logo.png" alt=""></a>
        </div>
        <nav class="header__nav nav">
                <ul class="nav__body">
                    <li class="nav__item"><a class="nav__link" href="index.php">Главная</a></li>
                    <li class="nav__item"><a class="nav__link" href="store.php">Магазин</a></li>
                    <?php
                        if (empty($_SESSION['login'])) {
                            echo '<li class="nav__item"><a class="nav__link" href="authorization.php">Вход</a></li>';
                            echo '<li class="nav__item"><a class="nav__link" href="registration.php">Регистрация</a></li>';
                        }
                        else{
                            echo '<li class="nav__item"><a class="nav__link" href="cart.php">Корзина</a></li>';
                        }
                    ?>
                </ul>
        </nav>
</header>