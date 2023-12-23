<?php
    session_start();
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        try {
            define('DB_HOST', 'localhost'); //Адрес
            define('DB_USER', 'roadyld0_shop'); //Имя пользователя
            define('DB_PASSWORD', 'Sosa123!'); //Пароль
            define('DB_NAME', 'roadyld0_shop'); //Имя БД
            $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
            $link = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD);
            mysqli_select_db($link, DB_NAME);
        } catch(Exception $e) {
            die('Ошибка');
        }
        $sql = 'SELECT login FROM users WHERE login=' . '"' . $login . '"';
        $result = mysqli_query($link, $sql);
        // $row = mysqli_fetch_array($result);
        if (empty($result)) {
            $sql = 'INSERT INTO users (login, password) VALUES ("' . $_POST['login'] . '", ' . '"' . $_POST['password'] . '")';
            $result = mysqli_query($link, $sql);
            $_SESSION["login"] = $_POST['login'];
        }


        header('Location: /cart.php');
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
    include('./sections/header.php');
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
            Регистрация
        </button>
    </form>
</body>
</html>