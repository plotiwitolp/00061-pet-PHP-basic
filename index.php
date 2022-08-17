<?php require './header.php'; ?>

<!-- ----------------------- -->
<?= doTitle('11 ООП'); ?>
<?= 'Классы<br>' ?>
<?php

require './point.php';
$point1 = new Point;
$point2 = new Point();

$point1->x = 5;
$point1->y = 8;

$point2->x = 15;
$point2->y = 18;;
print_r($point1);
print_r($point2);

unset($point2);
?><br>
<?php
var_dump($point2);
?>
<br>
<!-- ----------------------- -->
<?= doTitle('12 Области видимости переменных класса'); ?>
<?php
require "./point2.php";

$point1 = new Point2;
$point1->x = 5;
$point1->y = 8;

var_dump($point1);
?><br>
<?php
echo Point2::$num;
?><br>
<?php
$first = $second = 2;
$first = 3;
echo $first . '<br>' . $second;
?><br>
<?php
$firstObj = new Point2;
$firstObj->x = 40;
$secondObj = $firstObj;
$secondObj->x = 27;
echo $firstObj->x . '<br>' . $secondObj->x;
?><br>
<?php
$firstNum = 5;
$secondNum = &$firstNum; // link to $firstNum
$secondNum = 3;
echo $firstNum;
?>
<br>
<!-- ----------------------- -->
<?= doTitle('13 Расстояние между двумя точками'); ?>
<?php
$obj1 = new Point2;
$obj1->x = 7;
$obj1->y = 10;
$obj2 = clone $obj1; // clone
$obj2->x = 17;
var_dump($obj1);
?><br>
<?php
var_dump($obj2);
?><br>
<?php
echo pow(2, 8);
?><br>
<?php
echo sqrt(16);
?><br>
<?php
$p1 = new Point2;
$p1->x = 3;
$p1->y = 10;
$p2 = new Point2;
$p2->x = 10;
$p2->y = 34;

$distance = sqrt(pow(($p2->x - $p1->x), 2) + pow(($p2->y - $p1->y), 2));
echo $distance;
?>
<br>
<!-- ----------------------- -->
<?= doTitle('14 Константы'); ?>
<?php
// define('NUM1', 1); // кроме объекта и дескриптора ресурс, только простые типы данных

if (define('NUM1', 765)) {
    echo "Константа NUM1 успешно создана и имеет значение 765";
}
?><br>
<?php
if (defined('NUM1')) {
    echo "Константа уже создана";
}
?><br>
<?php
echo NUM1;
?><br>
<?php
echo constant('NUM1'); // для возможности динамичного вывода констант, пример:
?><br>
<?php
$num5 = mt_rand(1, 10);
$name1 = "VALUE$num5";
define($name1, $num5);
echo constant($name1);
?><br>
<?php
// имеется множество стандартных констант которые имеются в языке
// пример:
echo 'File name: ' . __FILE__ . '<br>';
echo 'String: ' . __LINE__ . '<br>';
echo 'String: ' . __LINE__ . '<br>';
?>
<br>
<!-- ----------------------- -->
<?= doTitle('15 Константы класса и путь к файлу'); ?>
<?= 'Путь к файлу ' . __DIR__ . '/test1' . '<br>'; ?>
<?php
class constName
{
    const NAME = "str";
}
if (defined('constName::NAME')) {
    echo "константа определена";
}
?>
<br>
<!-- ----------------------- -->
<?= doTitle('16 Конкатенация строк'); ?>
<?php
echo 'text' . 15 . '<br>';
$str16 = 'str1';
$str16 .= ' str2';
echo $str16;
?><br>
<?php
echo 'one string', ' two string', ' three string';
?>
<br>
<!-- ----------------------- -->
<?= doTitle('17 Арифметические операторы'); ?>
<?php
echo 4 ** 2;
?><br>
<?php
echo 8 % 3;
?><br>
<?php
echo (int) (8 / 3);
?><br>
<?php
echo 4096 ** (1 / 3); // кубический корень
// ++
// --
?>
<br>
<!-- ----------------------- -->
<?= doTitle('18 Поразрядные операторы'); ?>
<?= 6 & 10; ?><br>
<?= 650 & 11110; ?><br>
<?php

?>
<br>
<!-- ----------------------- -->
<?= doTitle('19 Операторы сравнения'); ?>
<?php
$x19 = -100;
$y19 = '1';
?>
<?= "\$x = $x19 ", "\$y = $y19"; ?><br>
<?= '$x < $y ', $x19 < $y19; ?><br>
<?= '$x <= $y ', $x19 <= $y19; ?><br>
<?= '$x > $y ', $x19 > $y19; ?><br>
<?= '$x >= $y ', $x19 >= $y19; ?><br>

<?= '$x == $y ', $x19 == $y19; ?><br>
<?= '$x != $y ', $x19 != $y19; ?><br>
<?= '$x <> $y ', $x19 <> $y19; ?><br> <!-- тоже самое что и $x != $y -->
<?= '$x === $y ', $x19 === $y19; ?><br>
<?= '$x !== $y ', $x19 !== $y19; ?><br>

<?= '$x <=> $y ', $x19 <=> $y19; ?><br>
<br>
<!-- ----------------------- -->
<?= doTitle('20 Условный оператор if '); ?>
<?php
if (true) {
    //
    echo 'true';
} elseif (0) {
    //
    echo '0';
} else {
    //
    echo 'false';
}
?><br>
<?= "" ?><br>