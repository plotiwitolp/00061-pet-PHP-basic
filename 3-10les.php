<?php require './header.php'; ?>
<!-- ----------------------- -->
<?= doTitle('21 Логические операторы'); ?>
<?php
$num21 = 5;
if ($num21 > 0 && $num21 < 8) {
    echo "$num21 > 0 && $num21 < 8";
}
?>
<!-- ----------------------- -->
<?= doTitle('22 Тернарный условный оператор'); ?>
<?php
echo  true ? 'true' : 'false';

$y22 = null;
$y22 = $y22 ?? 1;
?><br>
<?= $y22  ?><br>
<?php

$num22 = 0;
start:
$num22++;
if ($num22 > 10) {
    goto end;
}
echo $num22 . ' ';
goto start;
end:
?>
<!-- ----------------------- -->
<?= doTitle('23 Переключатель switch'); ?>
<?php
$char23 = 'c++';

switch ($char23) {
    case 'php': ?> <h4>PHP</h4>
    <?php break;
    case 'js': ?> <h4>JS</h4>
    <?php break;
    case 'c++': ?> <h4>c++</h4>
    <?php break;
    case 'c#': ?> <h4>c#</h4>
<?php break;
    default:
        '';
}

$var23 = 10;
switch (true) {
    case ($var23 < 12 && $var23 > 5):
        echo "$var23 < 12 && $var23 > 5";
        break;
    case ($var23 > 12):
        echo "$var23 > 12";
        break;
    case ($var23 < 5):
        echo "$var23 < 5 ";
        break;
    default:
        echo "No";
        break;
}
?>
<!-- ----------------------- -->
<?= doTitle('24 Чтение из файла и запись в файл'); ?>
<?php
// file_get_contents();
// file_put_contents();
$homepage24 = file_get_contents('text.txt');
// echo $homepage24;
$homepage24 .= "\n\tAdded new text";
// file_put_contents('text1.txt', $homepage24);

if (!file_exists('./dir-made-by-php')) {
    mkdir('./dir-made-by-php', 0777, true);
    $today = date("Y-m-d-H-i-s");
    file_put_contents('./dir-made-by-php/text1.txt', $homepage24 . "\n" .  $today);
}
// file_put_contents("$today.txt", $today);
// echo file_get_contents('text1.txt');
?>
<!-- ----------------------- -->
<?= doTitle('25 Цикл While'); ?>
<?php
$i = 0;
while ($i <= 5) {
    $i++;
    if ($i == 3) continue;
    echo $i, ". ";
    $h = 0;
    while ($h <= 5) {
        $h++;
        if ($i == 4 && $h == 4 || $i == 1 && $h == 3) continue;
        echo "(", $h, ") ";
    }
    echo "<br>";
}
?>
<!-- ----------------------- -->
<?= doTitle('26 Цикл do while'); ?>
<?php
$i26 = 0;
do {
    echo "$i26 ";
} while (++$i26 <= 5);
?>
<!-- ----------------------- -->
<?= doTitle('27  Цикл for'); ?>
<?php
for ($i = 0; $i < 5; $i++) {
    echo "$i. ";
    for ($h = 5; $h > 0; $h--) {
        if ($h === 3 && $i === 2 || $i === 1 && $h !== 3) continue;
        echo "(", $h, ") ";
    }
    echo "<br>";
}

for ($i = 0, $j = 5; $i < 5, $j > 0; $i++, $j--) {
    echo "($i - $j) ";
}
echo "<br>";
for ($i = 0; $i < 100; $i += 10) {
    echo "$i ";
}
echo "<br>";
for ($i = 2; $i < 100; $i++) {
    // проверка всех чисел до числа i
    for ($j = 2; $j < $i; $j++) {
        if (($i % $j) !== 0) {
            continue; // пропускает итерацию цикла
        } else {
            $f = true;
            break; // полностью выходит из цикла
        }
    }
    // проверка флага и вывод числа
    if (!$f) echo "$i ";
    $f = false;
}
?>
<?= doTitle('28 '); ?>

<?php require "./footer.php";
