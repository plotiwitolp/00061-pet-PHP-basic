<?php require './header.php'; ?>
<!-- ----------------------- -->
<?= doTitle('21 Логические операторы'); ?>
<?php
$num21 = 5;
if ($num21 > 0 && $num21 < 8) {
    echo "$num21 > 0 && $num21 < 8";
}
?><br>
<?= "" ?><br>
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
file_put_contents('text1.txt', $homepage24);

$today = date("Y-m-d-H-i-s");
file_put_contents('text1.txt', $homepage24 . " " .  $today);
file_put_contents("$today.txt", $today);

echo file_get_contents('text1.txt');
?>
<?php require "./footer.php";
?>
<!-- <script>
    setInterval(() => {
        location.reload()
    }, 2000)
</script> -->