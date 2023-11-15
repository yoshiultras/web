<?php

$pageTitle1 = 'Главная';
$pageTitle2 = 'Обратная связь';
$pageTitle3 = 'Авторизация';

$second = date('s');

$current_page1 = false;
$current_page2 = false;
$current_page3 = false;

$listItems = array("Красивая морда!", "Пушистый", "очень добрый", "вообще хороший");

if ($second % 2 == 0) {
    $nameImage1 = 'img/snow.jpg';
    $nameImage2 = 'img/gif.gif';
} else {
    $nameImage1 = 'img/gif.gif';
    $nameImage2 = 'img/snow.jpg';

}

$currentDateTime = date('d.m.Y в H:i:s');
$numElements = rand(1, 10);

?>