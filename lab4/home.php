<?php
include('header.html');
?>
<html lang="en">
    <body>
        <div class="form__container">
            <form action="index.php" method="GET">
                <div>
                    <?php
                        if (isset($_POST['name'])) {

                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $radioButton = $_POST['from'];
                            echo '<p name="name">' . 'Здравствуйте, ' . $_POST['name'] . '</p>';
                            if ($_POST['appealType'] == 'proposal') {
                                echo '<p>Спасибо за ваше предложение:</p>';
                                echo '<textarea>' . $_POST['textOfAppeal'] . '</textarea>';
                            } else {
                                echo '<p>Мы рассмотрим Вашу жалобу:</p>';
                                echo '<textarea>' . $_POST['textOfAppeal'] . '</textarea>';
                            }
                            $file = $_FILES['attachment'];
                            if ($file['name'] != "") {
                                
                                $uploadedFile = $file['name'];
                                echo '<p>Прикрепленный файл: </p>'. $uploadedFile;
                            }
                            else  echo '<p>Файл не прикреплен</p>';
                        }
                    ?>
                </div>
                
                <a href="index.php?name=<?php echo $_POST['name']; ?>&email=<?php echo $_POST['email']; ?>&agreement=<?php echo $_POST['agreement']; ?>&from=<?php echo $_POST['from']; ?>">Заполнить снова</a>

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