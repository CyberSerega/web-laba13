<!DOCTYPE html>
<html>
<head>
<title>Лабораторная работа №13 №8</title>
<meta charset="utf-8">
</head>
<body>
<form action="" method="POST">
 <p>Ваше имя: <input type="text" name="name" value = "<?php 
 if (!empty($_POST['name'])) echo $_POST['name']; ?>"></p> 
 <p><input type="submit" ></p>
</form>

<?php
if (!empty($_POST['name'])){
$name = strip_tags($_POST["name"]);
echo "Привет, $name";
}
?>
</body>
</html>