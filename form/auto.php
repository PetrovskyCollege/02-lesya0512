<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Title</title>
</head>
<body>

<header>
    <div class="right">
        <img src="../image/logo.svg" alt="">
    </div>
</header>

<div class="container">

    <h2>в вашем аккаунте будут хранится все записанные вами фильмы вместе с рейтингом и впечатлениями</h2>

    <form action="" method="post">

    <div class="form-item-reg">
        <div class="inputs">
        <input type="text" name="login" id="login" placeholder="логин">
        <input type="password" name="password" id="password" placeholder="пароль">
        </div>

        <button type="submit" class="btn">Войти</button>

    </div>

    </form>

</div>
</body>
</html>

<?php
if (isset($_GET["login"])) {
    echo "<h2>Привет, " . $_GET["login"] . "! </h2>";
}

if (isset($_POST["login"])) {
    echo "<h2>Привет, " . $_POST["login"] . "! </h2>";
}

