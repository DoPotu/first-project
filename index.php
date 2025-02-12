<?php
// Устанавливаем часовой пояс
date_default_timezone_set('Europe/Moscow');
// Получаем текущее время
$current_time = date('H:i:s');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добро пожаловать</title>
    <link rel="stylesheet" href="style.css"> <!-- Если у вас есть CSS файл -->
</head>
<body>
    <header>
        <h1>Добро пожаловать на мой сайт!</h1>
    </header>
    <main>
        <p>Сегодня: <?= date('d-m-Y') ?></p>
        <p>Текущее время: <?= $current_time ?></p>
        <p>Спасибо, что посетили наш сайт!</p>
    </main>
    <footer>
        <p>&copy; <?= date('Y') ?> Мой Сайт</p>
    </footer>
</body>
</html>
