<?php
try {
define('DB_HOST', 'std-2313.ist.mospolytech.ru:3306/std_2313_web'); //Адрес
define('DB_USER', 'std_2313_web'); //Имя пользователя
define('DB_PASSWORD', '12345678'); //Пароль
define('DB_NAME', 'std_2313_web'); //Имя БД
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$link = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD);
mysqli_select_db($link, DB_NAME);
} catch(Exception $e) {
die('Ошибка');
}
?>