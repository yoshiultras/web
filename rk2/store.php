<?php
session_start();
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
    ?>
    <div class="container mt-5">
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
            echo "<div class='row'>";
            echo "<div class='col-md-2'><p>{$row['title']}</p></div>" . 
                    "<div class='col-md-3'><img style='height:200px;' src='" . $row['img'] . "' alt=''></div>" . 
                    "<div class='col-md-2'><p>{$row['price']}$</p></div>" . 
                    "<div class='col-md-3'><p>{$row['short_description']}</p></div>" . 
                    "<div class='col-md-2'><a href=" . '"product.php?id=' . $i . '"' . ">Страница товара</a></div>";
            echo "</div>";
            $i = $i + 1;
        }
        ?>
    </div>

    <?php
    include('sections/footer.php');
    ?>
</body>
</html>