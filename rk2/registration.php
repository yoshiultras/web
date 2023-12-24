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
        $sql = 'SELECT login FROM users WHERE login=' . '"' . $login . '"';
        $result = mysqli_query($link, $sql);
        // $row = mysqli_fetch_array($result);
        if (empty($result)) {
            $sql = 'INSERT INTO users (login, password) VALUES ("' . $_POST['login'] . '", ' . '"' . $_POST['password'] . '")';
            $result = mysqli_query($link, $sql);
            $_SESSION["login"] = $_POST['login'];
        }


        header('Location: /rk2/cart.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    include('./sections/header.php');
    ?>
    <div class="container mt-5">
        <form method="post">
            <div class="form-group">
                <label for="login">Логин</label>
                <input class="form-control" type="text" name="login" id="login">
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <br>
            <button class="btn btn-primary" type="submit">
                Регистрация
            </button>
        </form>
    </div>
    <?php
    include('sections/footer.php');
    ?>
</body>
</html>