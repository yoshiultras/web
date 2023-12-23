<?php
session_start();
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
    <table>
        <tr><th>Название</th><th>Картинка</th><th>Цена</th><th>Краткое описание</th><th>Страница на ссылку товара</th></tr>
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
        $sql = 'SELECT title, img, short_description, price FROM products';
        $result = mysqli_query($link, $sql);
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td>{$row['title']}</td>" . '<td><img src="' . $row['img'] . '" alt=""></td>' . "<td>{$row['price']}$</td><td>{$row['short_description']}</td><td><a href=" . '"product.php?id=' . $i . '"' . ">Страница товара</a></td></tr>";
            $i = $i + 1;
        }
        ?>
    </table>
</body>
</html>