<!DOCTYPE html>
<html>
<head>
<title>Лабораторная работа №13 №1-3</title>
<meta charset="utf-8">
</head>
<body>
<?php
if (empty($_POST['city'])){
?>
<form action="" method="POST">
 <p>Ваш город: <input type="text" name="city" /></p>
 <p><input type="submit" /></p>
</form>
<?php
}
?>
<?php
if (!empty($_POST['city'])){
$city = strip_tags($_POST["city"]);
echo "Ваш город: " . $city;
}
?>
</body>
</html>