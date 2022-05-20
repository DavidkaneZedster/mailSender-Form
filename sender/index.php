<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="feedback">
    <div class="container">
        <div>
            <h1 class="form-title">Оставьте заявку на заказ сейчас:</h1>
        </div>
        <div class="feedback-form">
            <form action="sender.php" method="post">
                <input type="text" class="name" name="name" placeholder="Имя" required>
                <input type="text" name="surname" placeholder="Фамилия">
                <input type="text" class="phone" name="phone" placeholder="Телефон" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="text" id="" cols="30" rows="" placeholder="Введите текст"></textarea>
                <button type="submit" class="send-form">Отправить заявку</button>
                <div class="status"></div>
            </form>
        </div>
    </div>
</section>
</body>
</html>