<?php
require_once "assets/bd.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Тест</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="jagged">
    <div class="content">
        <div class="header-left">
            <div class="info">
                <span>Телефон: <a href="tel:+7(499)340-94-71">(499) 340-94-71</a></span>
                <span>Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></span>
            </div>
            <div class="header-title">
                <span>Комментарии</span>
            </div>
        </div>
        <div class="header-right">
            <div class="header-logo">
                <img src="assets/logo-future.png" alt="Future - internet agency">
            </div>
        </div>
    </div>
</header>
<div class="content">
    <div class="messages">
        <?php
        $commends = mysqli_query($link, "SELECT * FROM `commends` ORDER BY `Date` DESC, `Time` DESC, `Id` DESC");
        while ($row = mysqli_fetch_array($commends)) {
        ?>
            <div class="message">
                <div class="message-top">
                    <div class="message-author"><span><?= $row["Author"] ?></span></div>
                    <div class="message-time"><span><?= date("H:i", strtotime($row["Time"])) ?></span></div>
                    <div class="message-date"><span><?= date("d.m.Y", strtotime($row["Date"])) ?></span></div>
                </div>
                <div class="message-bottom">
                    <div class="message-content"><p><?= $row["Text"] ?></p></div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <section id="commend">
        <h2>Оставить комментарий</h2>
        <form id="send-commend" method="post" action="assets/add_commend.php">
            <label for="commend-name">Ваше имя</label>
            <input type="text" name="name" id="commend-name" placeholder="Герасим">
            <label for="commend-message">Ваш комментарий</label>
            <textarea name="message" id="commend-message"></textarea>
            <button>Отправить</button>
        </form>
    </section>
</div>
<footer>
    <div class="content">
        <div class="footer-logo">
            <img src="assets/logo-future.png" alt="Future - internet agency">
        </div>
        <div class="info">
            <span>Телефон: <a href="tel:+7(499)340-94-71">(499) 340-94-71</a></span>
            <span>Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></span>
            <span>Адрес: <a href="#">105088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</a></span>
            <span class="copyright">&#169; 2010 - 2014 Future. Все права защищены</span>
        </div>
    </div>
</footer>
</body>
</html>