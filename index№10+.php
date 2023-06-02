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