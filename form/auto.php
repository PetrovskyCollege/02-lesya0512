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

<form action="" method="post">

    <div class="form-item">
        <label for="login">Login</label> <br>
        <input type="text" name="login" id="login">
    </div>
    <br>
    <div class="form-item">
        <label for="password">Password</label> <br>
        <input type="password" name="password" id="password">
    </div>
    <br>
    <button type="submit">Отправить</button>

</form>
    
</body>
</html>

<?php
if (isset($_GET["login"])) {
    echo "<h2>вы авторизованны, " . $_GET["login"] . "! </h2>";
}

if (isset($_POST["login"])) {
    echo "<h2>Привет, " . $_POST["login"] . "! </h2>";
}
