<?php require './header.php'; ?>
<!-- ----------------------- -->
<?= doTitle('31 Интерполяция элементов массива в строки'); ?>
<?php
$arr1 = [
    'key_1' => [1, 2, 3],
    'key_2' => [3, 4, 5],
];
$arr2["key_3"] = 5;
echo "Text {$arr1["key_1"][1]} and another text<br>";
echo "Text $arr2[key_3] and another text";
?>

<!-- ----------------------- -->
<?= doTitle('32 Конструкция list и как поменять местами значения переменных'); ?>
<?php
$arr3 = [1, 2, 3];
list($one, $two, $three) = $arr3; // list работает только с индекснами массивами у которых индекс начинается с 0
echo " (" . $one . ") ";
echo " (" . $two . ") ";
echo " (" . $three . ") ";
$x = 6;
$y = 3;
list($y, $x) = [$x, $y];
echo "x - " . $x . "; y - " . $y;
?>
<!-- ----------------------- -->
<?= doTitle('33 Обход массива циклом for и foreach'); ?>
<?php
$numbers = [1, 2, 3, 4, "text", true];
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . ", ";
}
echo "/// ";

$arr4 = [
    'auto' => "Dodge",
    'plane' => "IL-2",
    'ship' => "Black Pearl",
];
foreach ($arr4 as $key => $value) {
    echo "$key => " . $value . ",     ";
}
echo '<br>';
$arr5 = [
    'auto' => ["Lada", "Chevrolet", "Dodge"],
    'planes' => ["IL-2", "I-16", "Misserdshmidt"],
    'ships' => ["Avianoser", "Fregat", "Asminer"],
];
// foreach ($arr5 as $k => $v) {
//     echo '<b>' . $k . ':</b> <br>';
//     for ($i = 0; $i < count($arr5[$k]); $i++) {
//         if ($i !== 2 && $k == 'ships') continue;
//         echo $arr5[$k][$i] . ", ";
//     }
//     echo '<br>';
// }
foreach ($arr5 as $k => $v) {
    echo '<b>' . $k . ':</b> <br>';
    foreach ($v as $k2 => $v2) {
        if ($k2 !== 2 && $k == 'ships') continue;
        echo '<i>' . $v2 . "</i>, ";
    }
    echo '<br>';
}

?>

<!-- ----------------------- -->
<?= doTitle('34 Слияние и сравнение массивов'); ?>
<?php
// $first = [1 => 'red', 2 => 'blue'];
// $second = [3 => 'brown', 4 => 'green'];
// $con = $first + $second;
$first = ['red', 'blue'];
$second = ['brown', 'green'];
$third = ['yellow', 'white'];
$fourth = ['red', 'blue'];
$con = array_merge($first, $second, $third);
echo '<pre>';
print_r($con);
echo '</pre>';
if ($first == $fourth) echo "Arrays are equal";
?>
<!-- ----------------------- -->
<?= doTitle('35 Проверка существования и удаление элементов массива'); ?>
<?php
$arr6 = [5 => 1, 2, 3];
for ($i = 0; $i < 10; $i++) {
    if (isset($arr6[$i])) {
        echo "El \$arr[$i] exists<br>";
    } else {
        echo "El \$arr[$i] doesn't exist<br>";
    }
}
$result = in_array('2', $arr6, true) ? "yes " : "no ";
echo $result;

echo '<br>';
echo array_key_exists(11, $arr6); // bool
echo '<br>';
echo array_search(1, $arr6);
echo '<br>';
unset($arr6[6]); // delete el
echo '<pre>';
print_r($arr6);
echo '</pre>';
?>
<!-- ----------------------- -->
<?= doTitle('36 Решаем задачи на понимание массивов'); ?>
<?php
$arr7 = ['red', 'green', 'blue', 'violet', 'gray', 'pink'];
echo $arr7[rand(0, (count($arr7) - 1))];
//
$length = rand(5, 10);
$arr8 = [];
for ($i = 0; $i < $length; $i++) {
    $arr8[$i] = rand(0, 100);
}
sort($arr8);
echo '<pre>';
print_r($arr8);
echo '</pre>';
//
$arr9 = file('./month.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo '<pre>';
print_r($arr9);
echo '</pre>';
?>
<!-- ----------------------- -->
<?= doTitle('37 Функции'); ?>
<?php
function myFunction($a, $b)
{
    $sum = $a + $b;
    return $sum;
}
echo myFunction(4, 5);
?>
<!-- ----------------------- -->
<?= doTitle('38 Параметры и аргументы функций'); ?>
<?php
function myFunction2(int $a, int $b): int
{
    $sum = $a + $b;
    return $sum;
}
echo myFunction2(4.3, 5.9);
echo '<br>';
//
function sum(&$b, $a = 5, $c = 2) // & - передача параметра по ссылке; Объекты и массивы передаются в функцию сразу по ссылке
// необязательные параметры должны быть после обязательных
{
    $b = 1;
    $a = $a + 10 + $c;
    return $a + $b;
}
$b = 10;
echo sum($b), '<br>';
echo $b, '<br>';
//
function outArguments(...$items)
{
    foreach ($items as $arg) {
        echo "$arg ";
    }
}
outArguments('PHP', 'JS', 'HTML', 'CSS');
echo '<br>';
//
function outArguments2($a, $b, $c)
{
    echo "$a " . "$b " . "$c ";
}
$items2 = ['PHP', 'JS', 'Python', 'C++', 'Go', 'HTML', 'CSS'];
outArguments2(...$items2);
echo '<br>';
//
function outArguments3(...$itemsParam3)
{
    foreach ($itemsParam3 as $param) {
        echo "$param ";
    }
}
$itemsArg3 = ['PHP', 'JS', 'Python', 'C++', 'Go', 'HTML', 'CSS'];
$itemsArg4 = ['PHP', 'JS', 'Python', 'C++', 'Go', 'HTML', 'CSS', 'C#'];
outArguments3(...$itemsArg3);
echo '<br>';
outArguments3(...$itemsArg4);
?>
<!-- ----------------------- -->
<?= doTitle('39 Глобальные переменные'); ?>
<?php
function sum2()
{
    global $var2;
    $var2  = 2;
    return $var2;
}

$var2 = 6;
echo sum2();
echo $var2;

function sum3()
{
    static $var = 0; // static (переменная "запоминает" свое предыдущее значение)
    echo '<br>', ++$var;
}
sum3();
sum3();
sum3();
?>
<!-- ----------------------- -->
<?= doTitle('40 Рекурсия, вложенные и анонимные функции'); ?>
<?php

function recursia($counter)
{
    if ($counter > 0) {
        echo ($counter--) . '<br>';
        recursia($counter);
    } else return;
}
recursia(8);

function outter()
{
    function inner()
    {
        return "Hello world";
    }
}
outter();
echo inner(), '<br>';
// динамическое имя функции
function first()
{
    return "First function";
}
function second()
{
    return "Second function";
}

$newFunction = rand(0, 1) ? 'first' : 'second';

echo $newFunction();

// usort($arr2, function($a, $b){
//     return $a <=> $b;
// });
?>

<?php require "./footer.php";
