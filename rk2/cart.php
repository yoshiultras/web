<?php
session_start();
if (empty($_SESSION['login'])) {
    header('Location: /');
    die();
}

if (isset($_POST['remove'])) {
    try {
        define('DB_HOST', 'localhost'); //Адрес
        define('DB_USER', 'w90318po_bd'); //Имя пользователя
        define('DB_PASSWORD', 'N2k3ita0987!'); //Пароль
        define('DB_NAME', 'w90318po_bd'); //Имя БД
        $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        $link = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD);
        mysqli_select_db($link, DB_NAME);
    } catch(Exception $e) {
        die('Ошибка');
    }
    $sql = 'DELETE FROM cart WHERE login="' . $_SESSION['login'] . '" AND product_id=' . $_POST['remove'];
    $result = mysqli_query($link, $sql);
    header('Location: /cart.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <?php
        include('sections/header.php');
    ?>
    <div class="cart__container">
        <?php
            try {
                define('DB_HOST', 'localhost'); //Адрес
        define('DB_USER', 'w90318po_bd'); //Имя пользователя
        define('DB_PASSWORD', 'N2k3ita0987!'); //Пароль
        define('DB_NAME', 'w90318po_bd'); //Имя БД
                $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
                $link = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD);
                mysqli_select_db($link, DB_NAME);
            } catch(Exception $e) {
                die('Ошибка');
            }
            $sql = 'SELECT * FROM products JOIN cart ON id = product_id WHERE login =' . '"' ."{$_SESSION['login']}" . '"';
            $result = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo '<div class="cart__product">' . '<div class="cart__img-container"><img src="'. $row['img'] .'" alt=""></div> <div class="cart__text"><div class="cart__product-title">' . $row['title'] . '</div><div class="cart_product-desc">' . $row['short_description'] . '</div>' . '</div>' . '<form action="" method="post"><button type="submit" name="remove" value="' . $row['id'] . '">Убрать из корзины</button></form>' .'</div>';
                
            }
        ?>
    </div>
</body>
</html>