<?php
    session_start();
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
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
        $sql = 'SELECT login, password FROM users WHERE login=' . '"' . $login . '"';
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        if (!empty($row) && $row[1] === $password) {
            $_SESSION["login"] = $row[0];
            header('Location: /cart.php');
            die();
        }
        // header('Location: /cart.php');
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
    <form action="" class="form" method="post">
        <div class="form__login">
            <label for="login">Логин</label>
            <input type="text" name="login" id="login">
        </div>
        <div class="form__password">
            <label for="password">Пароль</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">
            Вход
        </button>
    </form>
</body>
</html>