<?php
include('header.html');
$name = '';
$email = '';
$agreement = '';
$radioButton = '';
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $agreement = $_GET['agreement'];
    $radioButton = $_GET['from'];
}
?>
<html lang="en">
<body>
    <div class="form__container">
        <form action="home.php" method="post" enctype="multipart/form-data">
            <label for="name">Имя</label>
            <input type="text" name="name" id="name" value="<?php echo $name ?>">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $email ?>">
            
            <label for="from" style="display: block; margin-top: 2vh;">Как вы узнали о нас</label>
            
            <?php if($radioButton == 'fromSearch') {
                echo '<input checked=true type="radio" value="fromSearch" name="from" id="fromSearch"><label for="from">Из поиска</label>
                <input type="radio" value="fromAd" name="from" id="fromAd"><label for="from">Из рекламы</label>';
            } else {
                echo '<input type="radio" value="fromSearch" name="from" id="fromSearch"><label for="from">Из поиска</label>
                <input checked=true type="radio" value="fromAd" name="from" id="fromAd"><label for="from">Из рекламы</label>';
            }
            ?>

            <label for="appealType" style="display: block; margin-top: 2vh;">Тип обращения</label>
            <select name="appealType" id="appealType">
                <option value="complaint">Жалоба</option>
                <option value="proposal">Предложение</option>
            </select>

            <label for="textOfAppeal">Текст обращения</label>
            <textarea name="textOfAppeal" id="textOfAppeal" cols="20" rows="1"></textarea>

            <input type="file" name="attachment" id="attachment">

            <input checked="<?php if ($agreement = 'yes') true ?>" type="checkbox" id="approval" value="yes" required name="agreement"><label for="agreement">Даю согласие на обработку персональных данных</label>

            <button type="submit">Отправить</button>
        </form>
    </div>
    <footer class="footer">
        <div class="footer__info">
            <p class="info__mail">Почта: snejok_kot@gmail.com</p>
            <p class="info__phone">Телефон: +79031842826</p>
        </div>
    </footer>
</body>
</html>