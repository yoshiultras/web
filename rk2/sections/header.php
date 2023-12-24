<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Магазин</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item text-white">
                        <a class="nav-link" href="index.php">Главная</a>
                    </li>
                    <li class="nav-item text-white">
                        <a class="nav-link" href="store.php">Товары</a>
                    </li>
                    <?php
                        if (empty($_SESSION['login'])) {
                            echo '<li class="nav-item text-white"><a class="nav-link" href="authorization.php">Вход</a></li>';
                            echo '<li class="nav-item text-white"><a class="nav-link" href="registration.php">Регистрация</a></li>';
                        }
                        else{
                            echo '<li class="nav-item text-white"><a class="nav-link" href="cart.php">Корзина</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- <header class="header">
        <div class="header__logo">
            <a href="index.php"><img src="../img/logo.png" alt=""></a>
        </div>
        <nav class="header__nav nav">
                <ul class="nav__body">
                    <li class="nav__item"><a class="nav__link" href="index.php">Главная</a></li>
                    <li class="nav__item"><a class="nav__link" href="store.php">Магазин</a></li>
                   
                </ul>
        </nav>
</header> -->