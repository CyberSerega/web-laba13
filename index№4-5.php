<!DOCTYPE html>
<html>
<head>
<title>Лабораторная работа №13 №4,5</title>
<meta charset="utf-8">
</head>
<body>
<form action="" method="POST">
 <p>Ваше имя: <input type="text" name="name" /></p>
 <p>Ваш возраст: <input type="text" name="age" /></p>
 <p>Ваше сообщение: <textarea name="message" /></textarea></p>
 <p><input type="submit" /></p>
</form>

<?php
if (!empty($_POST['name'])){
$name = strip_tags($_POST["name"]);
$age = strip_tags($_POST["age"]);
$message = strip_tags($_POST["message"]);
echo "Привет, $name, тебе $age лет <br>";
echo "Твоё сообщение: $message";
}
?>
</body>
</html>