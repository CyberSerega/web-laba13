<!DOCTYPE html>
<html>
<head>
<title>Лабораторная работа №13 №7</title>
<meta charset="utf-8">
</head>
<body>
<form action="" method="POST">
 <p>Логин: <input type="text" name="login" /></p>
 <p>Пароль: <input type="password" name="passwd" /></p>
 <p><input type="submit" /></p>
</form>

<?php
$login = "student";
$password = "qwerty";
if (!empty($_POST['login'])){
$userLogin = strip_tags($_POST["login"]);
$userPassword = strip_tags($_POST["passwd"]);
$userLogin = trim($userLogin);
$userPassword = trim($userPassword);
if($login==$userLogin & $password==$userPassword)
echo "Доступ разрешен!";
else echo "Доступ запрещён!";
}
?>
</body>
</html>