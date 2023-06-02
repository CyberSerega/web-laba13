<h1 align="center" paddin> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>

<p align="center">Лабораторная работа №12 "PHP" </p>

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

```php
<h3>Задание2</h3>
<?php
function callb($n)
{
    return strtoupper($n);
}
$array = ['a','b','c','d','e'];
$array = array_map('callb',$array);
print_r($array);
?>
<h3>Задание3</h3>
<?php
$arr = range(1, 100);
echo "В массиве " . count($arr) . " элементов.";
?>
<h3>Задание4</h3>
<?php
$arr = range(1, 100);
echo "Последний элемент массива равен " . $arr[count($array)-1];
?>

<h3>Задание5</h3>
<?php
$arr = range(1, 5);
if (in_array(3, $arr))
	echo "Массив содержит элемент, равный 3.";
else echo "Массив не содержит элемент, равный 3."
?>
<h3>Задание6</h3>
<?php
$arr = [1, 2, 3, 4, 5];
$sum=0;
for ($i = 0; $i<count($arr); $i++) {
    $sum+=$arr[$i];
}
echo "Сумма элементов массива равна " . $sum;
?>
<h3>Задание7</h3>
<?php
$arr = [1, 2, 3, 4, 5];
$res=1;
for ($i = 0; $i<count($arr); $i++) {
    $res*=$arr[$i];
}
echo "Произведение элементов массива равно " . $res;
?>
<h3>Задание8</h3>
<?php
$arr = [1, 2, 3, 4, 5];
$res=array_sum($arr)/count($arr);
echo "Cреднее арифметическое элементов массива  равно " . $res;
?>
<h3>Задание9</h3>
<?php
$array = range(1, 100);
echo "Массив, заполненный числами от 1 до 100:";
print_r($array);
?>
<h3>Задание10</h3>
<?php
$array = range('a', 'z');
echo "Массив, заполненный буквами от 'a' до 'z':";
print_r($array);
?>
<h3>Задание11</h3>
<?php
$array = range(1,9);
echo implode("-", $array);
?>
<h3>Задание12</h3>
<?php
$sum =(1+100)*50;
echo "Сумма чисел от 1 до 100 равна " . $sum;
?>
<h3>Задание13</h3>
<?php
$arr = range(1,10);
echo "Произведение чисел от 1 до 100 равно " . array_product($arr);
?>
<h3>Задание14</h3>
<?php
$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
$result = array_merge($arr1, $arr2);
echo "Итоговый массив:";
print_r($result);
?>
<h3>Задание15</h3>
<?php
$arr = [1, 2, 3, 4, 5];
$result=array_slice($arr,1,3);
echo "Итоговый массив:";
print_r($result);
?>
<h3>Задание16</h3>
<?php
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 2);
echo "Итоговый массив:";
print_r($arr);
?>
<h3>Задание17</h3>
<?php
$arr = range(1,5);
$arr1 = array_splice($arr, 1, 3);
echo "Новый массив:";
print_r($arr1);
?>
<h3>Задание18</h3>
<?php
$arr1 = range(1,5);
$arr2 = ['a', 'b', 'c'];
array_splice($arr1, 3, 0,$arr2);
echo "Итоговый массив:";
print_r($arr1);
?>
<h3>Задание19</h3>
<?php
$arr = range(1,5);
array_splice($arr, 1, 0,array('a','b'));
array_splice($arr, 6, 0, 'c');
array_splice($arr, 8, 0, 'e');
echo "Итоговый массив:";
print_r($arr);
?>
<h3>Задание20</h3>
<?php
$arr = array('a'=>1, 'b'=>2, 'c'=>3);
$keys = array_keys($arr);
$values = array_values($arr);
echo "Ключи: ";
print_r($keys);
echo "<br>";
echo "Значения: ";
print_r($values);
?>
<h3>Задание21</h3>
<?php
$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];
$res = array_combine($arr1,$arr2);
echo "Итоговый массив: ";
print_r($res);
?>
<h3>Задание22</h3>
<?php
$arr = array('a'=>1, 'b'=>2, 'c'=>3);
$arr = array_flip($arr);
$values = array_values($arr);
echo "Изменённый массив: ";
print_r($arr);
?>
<h3>Задание23</h3>
<?php
$arr = range(1,5);
$arr = array_reverse($arr);
echo "Изменённый массив: ";
print_r($arr);
?>
<h3>Задание24</h3>
<?php
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$index = array_search('-',$arr);
echo "Позиция первого элемента '-': $index";
?>
<h3>Задание25</h3>
<?php
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$index = array_search('-',$arr);
array_splice($arr,$index,1);
echo "Изменённый массив: ";
print_r($arr);
?>
<h3>Задание26</h3>
<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
$arr[0] = '!';
$arr[3] = '!!';
echo "Изменённый массив: ";
print_r($arr);
?>
<h3>Задание27</h3>
<?php
$arr = array('3'=>'a', '1'=>'c', '2'=>'e', '4'=> 'b');
echo "Текущий массив: <br> ";
print_r($arr);
echo "<br>";
ksort ($arr);
echo "ksort: <br>";
print_r($arr);
echo "<br>";
krsort($arr);
echo "krsort: <br>";
print_r($arr);
echo "<br>";
rsort($arr);
echo "rsort: <br>";
print_r($arr);
echo "<br>";
sort($arr);
echo "rsort: <br>";
print_r($arr);
?>
<h3>Задание28</h3>
<?php
$arr = array('a'=>1, 'b'=>2, 'c'=>3);
$rand = array_rand($arr);
echo "Случайный ключ: " . $rand;
?>
<h3>Задание29</h3>
<?php
$arr = array('a'=>1, 'b'=>2, 'c'=>3);
$rand = $arr[array_rand($arr)];
echo "Случайный элемент: " . $rand;
?>
<h3>Задание30</h3>
<?php
$arr = range(1,7);
shuffle($arr);
echo "Изменённый массив: <br>";
print_r($arr);
?>
<h3>Задание31</h3>
<?php
$arr = range(1,25);
shuffle($arr);
echo "Изменённый массив: <br>";
print_r($arr);
?>
<h3>Задание32</h3>
<?php
$arr = range('a','z');
shuffle($arr);
echo "Созданный массив: <br>";
print_r($arr);
?>
<h3>Задание33</h3>
<?php
$arr = range('a','z');
shuffle($arr);
$str="";
$rand = array_rand($arr);
for($i=0; $i<6; $i++)
{
	if ($rand+$i>25) $rand=0;
	$index = $rand+$i;
	$str.=$arr[$index];
}
echo $str;
?>
<h3>Задание34</h3>
<?php
$arr = ['a', 'b', 'c', 'b', 'a'];
$res = [];
echo "Изначальный массив: <br>";
print_r($arr);
echo "<br>";
for($i=0; $i<count($arr); $i++)
{
	if (!in_array($arr[$i],$res)) array_push($res,$arr[$i]);
}
echo "Изменённый массив: <br>";
print_r($res);
?>
<h3>Задание35</h3>
<?php
$arr = range(1,5);
echo "Первый элемент: " . array_shift($arr);
echo "<br>";
echo "Последний элемент: " . array_pop($arr);
echo "<br>";
echo "Изменённый массив: <br>";
print_r($arr);
?>
<h3>Задание36</h3>
<?php
$arr = range(1,5);
array_unshift($arr,0);
array_push($arr,6);
echo "Изменённый массив: <br>";
print_r($arr);
?>
<h3>Задание37</h3>
<?php
$arr = range(1,8);
for($i=0; $i<4; $i++)
{
	echo array_shift($arr);
	echo array_pop($arr);
}
?>
<h3>Задание38</h3>
<?php
$arr = ['a','b','c'];
$str = '---';
$str1 = str_split($str);
array_splice($arr,3,0,$str1);
echo "Изменённый массив: <br>";
print_r($arr);
?>
<h3>Задание39</h3>
<?php
$arr = array_fill(0,10,'x');
echo "Созданный массив: <br>";
print_r($arr);
?>
<h3>Задание40</h3>
<?php
$arr = range(1,20);
$arrays = array_chunk($arr,4);
for($i=0; $i<5; $i++)
{
	echo "Массив $i <br>";
	print_r($arrays[$i]);
	echo "<br>";
}
?>
```
<h2 align="center">Вывод</h2>
<p align="justify">Таким образом, я научился работать с PHP, все поставленные цели были выполнены. </p>
