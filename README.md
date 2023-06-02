<h1 align="center" paddin> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>

<p align="center">Лабораторная работа №13 "PHP" </p>

<p align="right">Выполнил: Рогаль Сергей Александрович</p>
<p align="right">Проверил: Соболев Е. И.</p>

<p align="center">г. Южно-Сахалинск <br> 2023 год</p>

<h2 align="center">Введение</h2>
<p align="justify">PHP — язык программирования, который наиболее распространён в сфере веб-разработки.
В настоящее время PHP является одним из лидеров среди серверных языков программирования, применяющихся для создания динамических веб-сайтов и веб-приложений. Большая часть коробочных систем управления сайтами написана именно на PHP, язык поддерживается подавляющим большинством хостинг-провайдеров, Язык получил широкое распространение благодаря своей простоте, скорости, мультипарадигмальности, богатой функциональности и кроссплатформенности.
</p>

<h2 align="center">Цели и задачи</h2>
<palign="justify">Цели: решить задачи с применением языка PHP</p>
<palign="justify">Задачи: применить технологии PHP.</p>

<h2>Решение задач</h2>
<h3>Задания 1-3</h3>

```php
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
```
<h3>Задания 4-5</h3>

```php
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
```

<h3>Задание6 </h3>

```php
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
```

<h3>Задание7</h3>

```php
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
```

<h3>Задание8</h3>

```php
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
```

<h3>Задание9</h3>

```php
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
```

<h3>Задания 10-23</h3>

```php
<!DOCTYPE html>
<html>
<head>
<title>Лабораторная работа №13 №10+</title>
<meta charset="utf-8">
</head>
<body>
<h3>Задание 10</h3>
<?php
$str = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a[a-z]b/';
preg_match_all($regexp,$str,$res);
print_r($res);
?>
<h3>Задание 11</h3>
<?php
$str = 'aba aca aea abba adca abea';
$regexp = '/a..a/';
preg_match_all($regexp,$str,$res);
print_r($res);
?>
<h3>Задание 12</h3>
<?php
$str = 'aba aca aea abba adca abea';
$regexp = '/ab[^d]a/';
preg_match_all($regexp,$str,$res);
print_r($res);
?>
<h3>Задание 13</h3>
<?php
$str = 'aa aba abba abbba abca abea';
$regexp = '/ab+a/';
preg_match_all($regexp,$str,$res);
print_r($res);
?>
<h3>Задание 14</h3>
<?php
$str = 'aa aba abba abbba abca abea';
$regexp = '/ab*a/';
preg_match_all($regexp,$str,$res);
print_r($res);
?>
<h3>Задание 15</h3>
<?php
$str = 'aa aba abba abbba abca abea';
$regexp = '/ab?a/';
preg_match_all($regexp,$str,$res);
print_r($res);
?>
<h3>Задание 16</h3>
<?php
$str = 'ab abab abab abababab abea';
$regexp = '#(ab)+#';
preg_match_all($regexp,$str,$res);
print_r($res);
?>
<h3>Задание 17</h3>
<?php
$str = 'a.a aba aea';
$regexp = '#a[.]a#';
preg_match_all($regexp,$str,$res);
print_r($res);
?>
<h3>Задание 18</h3>
<?php
$str = '2+3 223 2223';
$regexp = '#2\\+3#';
preg_match_all($regexp,$str,$res);
print_r($res);
?>
<h3>Задание 19</h3>
<?php
$str = '23 2+3 2++3 2+++3 345 567';
$regexp = '#2[+]+3#';
preg_match_all($regexp,$str,$res);
print_r($res);
?>
<h3>Задание 20</h3>
<?php
$str = '23 2+3 2++3 2+++3 445 677';
$regexp = '#2[+]*3#';
preg_match_all($regexp,$str,$res);
print_r($res);
?>
<h3>Задание 21</h3>
<?php
$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
$regexp = '#[*]q+[+]#';
preg_match_all($regexp,$str,$res);
print_r($res);
?>
<h3>Задание 22</h3>
<?php
$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
$regexp = '#[*]q*[+]#';
preg_match_all($regexp,$str,$res);
print_r($res);
?>
<h3>Задание 23</h3>
<?php
$str = 'aba accca azzza wwwwa';
$regexp = '/a[^a]+a/';
$delimiter='!';
echo preg_replace($regexp,$delimiter,$str);
?>
</body>
</html>
```

<h2 align="center">Вывод</h2>
<p align="justify">Таким образом, я закрепил навык работы с PHP, все поставленные цели и задачи были выполнены. </p>
