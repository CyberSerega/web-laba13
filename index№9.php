<!DOCTYPE html>
<html>
<head>
<title>Лабораторная работа №13 №9</title>
<meta charset="utf-8">
</head>
<body>
<form action="" method="POST">
 <p>Ваше имя: <input type="text" name="name" value = "<?php 
 if (!empty($_POST['name'])) echo $_POST['name']; ?>"/></p>
 <p>Ваше сообщение: <textarea name="message" /><?php 
 if (!empty($_POST['message'])) echo $_POST['message']; ?></textarea></p>
 <p><input type="submit" /></p>
</form>

<?php
if (!empty($_POST['name'])){
$name = strip_tags($_POST["name"]);
$message = strip_tags($_POST["message"]);
echo "Привет, $name!<br>";
echo "Твоё сообщение: $message";
}
?>
</body>
</html>