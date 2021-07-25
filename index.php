<?php
include "database.php";

$result1 = mysqli_query($link, "SELECT name, content, message_date FROM `message` ORDER BY message_id DESC LIMIT 1");

$message = mysqli_fetch_assoc($result1);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form message</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="container">
    <div class="header">
        <div class="info">
            <h5>Телефон: (499) 340-94-71</h5>
            <h5>Email:<a href="#">info@future-group.ru</a></h5>
            <p>Комментарии</p>
        </div>
        <div class="logo">
            <img src="./pictures/logo.png"
                 alt="logo">
        </div>
    </div>

    <div class="comment">
        <div class="city-list">
            <?php foreach($message as $row): ?>
                <div class="city-list-row"><?php echo $row; ?></div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="form">
        <h2>Оставить комментарий</h2>
        <form action="addmessage.php" method="post">
            <div class="inputBox">
                <p>Ваше имя:</p>
                <label>
                    <input type="text" name="name" placeholder="Введите имя" required/>
                </label>
            </div>
            <div class="inputBox">
                <p>Ваш комментарий:</p>
                <label>
                    <textarea name="message" cols="50" rows="10" placeholder="Оставьте свой комментарий"></textarea>
                </label>
            </div>
            <div class="inputBox">
                <label><input id="button" type="submit" value="Отправить"/></label>
            </div>
        </form>
    </div>
    <footer>
        <div class="footer">
            <div class="logo">
                <img src="./pictures/logo-footer.png"
                     alt="logo">
            </div>
            <div class="info-footer">
                <h5>Телефон: (499) 340-94-71</h5>
                <h5>Email:<a href="#">info@future-group.ru</a></h5>
                <h5>Адрес: <a href="#">115088 Москва, ул. 2-я Машиностроения, дю 7 стр. 1</a></h5>
                <div class="future-footer">
                    <p>&copy; 2010 - 2014 Future. Все права защищены</p>
                </div>
            </div>
        </div>
    </footer>
</div>

</body>
</html>