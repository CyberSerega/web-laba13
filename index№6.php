<!DOCTYPE html>
<html>
<head>
<title>Лабораторная работа №13 №6</title>
<meta charset="utf-8">
</head>
<body>
<?php
if (empty($_POST['age'])){
?>
<form action="" method="POST"> 
 <p>Ваш возраст: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>
<?php
}
?>
<?php
if (!empty($_POST['age'])){
$age = strip_tags($_POST["age"]);
echo "Привет, тебе $age лет";
}
?>
</body>
</html>