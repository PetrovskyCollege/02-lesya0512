<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<header>
    <div class="right">
        <img src="../image/logo.svg" alt="">
    </div>
</header>

<div class="container">

    <h2>check films позволяет хранить воспоминания и впечатления о всех фильмах, которые вы смотрите</h2>

    <form action="" method="post">

    <div class="form-item">
        <input type="email" name="email" id="email" placeholder="e-mail">
        <input type="text" name="login" id="login" placeholder="логин">
        <input type="password" name="password" id="password" placeholder="пароль">

        <button type="submit">Зарегистрироваться</button>

    </div>

    </form>

    <h3>Уже есть аккаунт?? <br> <a href="auto.php">Войти</a></h3>

</div>
    
</body>
</html>

<?php
if (isset($_GET["login"])) {
    echo "<h2>вы авторизованны, " . $_GET["login"] . "! </h2>";
}

if (isset($_POST["login"])) {
    echo "<h2>Привет, " . $_POST["login"] . "! </h2>";
}
