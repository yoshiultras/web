<?php
    session_start();
    if (isset($_POST['add'])) {
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
        $sql = 'SELECT login, product_id FROM cart WHERE login=' . '"' . $_SESSION['login'] . '"' . 'AND product_id = "' . $_GET['id'] . '"';
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        if (empty($row)) {
            $sql = 'INSERT INTO cart (login, product_id) VALUES ("' . $_SESSION['login'] . '", ' . $_GET['id'] . ')';
            mysqli_query($link, $sql);
        }
        header('Location: /rk2/cart.php');
        die();
        
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
    include('sections/header.php');

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
    ?>
    <div class="сontainer mt-5">
    <?php
        $sql = 'SELECT * FROM products WHERE id = ' . '"' . $_GET['id'] . '"';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<h1>{$row['title']}</h1>";
            echo '<img style="height:300px;" src="' . $row['img'] . '" alt="">';
            echo "<p>{$row['full_description']}</p>";
            echo "<p>В наличии: {$row['in_stock']}</p>";
            echo "<p>{$row['specifications']}</p>";
            echo "<p>Цена: {$row['price']}$</p>";
        }
        if (!empty($_SESSION['login'])) {
            echo '<form action="" method="post"><button class="btn btn-primary" name="add" value="added" type="submit">Добваить в коризину</button></form>'; 
        }
    ?> 
    <br>
    <br>
    <br>
    </div>
    <?php
    include('sections/footer.php');
    ?>
</body>
</html>