<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Title</title>
</head>
<body>

<form action="reg.php" method="POST">
    <div class="form-item">
        <label for="mail">E-mail</label> <br>
        <input type="email" name="mail" id="mail" placeholder="E-mail">
    </div>
    <br>
    <div class="form-item">
        <label for="login">Login</label> <br>
        <input type="text" name="login" id="login" placeholder="Login">
    </div>
    <br>
    <div class="form-item">
        <label for="password">Password</label> <br>
        <input type="password" name="password" id="password" placeholder="Password">
    </div>
    <br>
    <div class="form-item">
        <label for="birthday">Date of birthday</label> <br>
        <input type="date" name="birthday" id="birthday">
    </div>
    <br>
    <div class="form-item">
        <input type="radio" id="sex" name="sex" value="man"/>
        <label for="sex">man</label> 
        <input type="radio" id="sex" name="sex" value="man"/>
        <label for="sex">woman</label> 
    </div>
    <br>
    <button type="submit">Отправить</button>
</form>

</html>

<?php
if (isset($_GET["login"])) {
    echo "<h2>Привет, " . $_GET["login"] . "! </h2>";
}

if (isset($_POST["login"])) {
    echo "<h2>Привет, " . $_POST["login"] . "! </h2>";
}

