<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>«Нарушениям.Нет»</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <?php if(!isset($_SESSION['user'])): ?>
            <a href="index.php">Авторизация</a>
            <a href="reg.php">Регистрация</a>
        <?php else: ?>
            <a href="state.php">Заявление</a>
            <a href="add.php">Оформить заявление</a>
            <?php if($_SESSION['user']['isAdmin'] == 1): ?>
                <a href="admin.php">Админ панель</a>
            <?php endif; ?>
            <a href="logout.php">Выход</a>
        <?php endif; ?>
    </header>
