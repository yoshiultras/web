<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    include('sections/header.php');
    ?>
    <div class="container mt-5 text-center">
    <p class="h4">
    Добро пожаловать в наш интернет-магазин телефонов! <br><br>
    Мы рады приветствовать вас на страницах нашего сайта, где вы найдете огромный выбор смартфонов и мобильных устройств от лучших производителей. <br>
    Наша команда постоянно работает над тем, чтобы предоставить вам самые свежие новинки, лучшие цены и высокое качество обслуживания. <br>
    Мы уверены, что вы найдете у нас то, что ищете, и сделаете покупку с удовольствием. <br><br>
    Спасибо, что выбрали наш магазин!    </p>
    </div>
    
    <?php
    include('sections/footer.php');
    ?>
</body>
</html>