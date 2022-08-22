<?php require './header.php'; ?>
<!-- ----------------------- -->
<?= doTitle('41 Замыкания и задачи на понимание функций'); ?>
<?php
// только в ананимных функциях  и только с конструкцией use
$message = "Text of message";
$mFu = function () use ($message) {
    echo $message;
};
$mFu();
?><br><?php
        // function isOdd(int $number)
        // {
        //     if ($number % 2) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }
        // echo isOdd(5);
        function sum(...$items)
        {
            $sum = 0;
            for ($i = 0; $i < count($items); $i++) {
                $sum += $items[$i];
            }
            return $sum;
        }
        $arr = [1, 2, 3, 4, 790];
        echo sum(...$arr);
        ?>
<!-- ----------------------- -->
<?= doTitle('42 Работа со строками на языке PHP, функции strlen, chr, ord'); ?>
<?php
// $str = "Привет  мир!";
echo mb_chr(1040);
// echo mb_ord("А");
// for ($i = 0; $i < mb_strlen($str); $i++) {
//     echo $str[$i] . "  ";
// }
?>
<?= doTitle('43 '); ?>
<?php
$str2 = 'PHP - [b]интерпретируемый язык[/b], а это [b]жирный текст[/b]';
$str2 = str_replace('[b]', '<b>', $str2);
$str2 = str_replace('[/b]', '</b>', $str2);
echo $str2;
?>
<?= doTitle('44 функции для работы с html htmlspecialchars и strip_tags'); ?>
<?php
$str3 = "text\nhello\nphp";
echo $str3;
echo "<br>";
echo nl2br($str3);
echo "<br>";
$str4 = "<script>alert('<b>Сайт</b> <p>взломан</p>')</script>";
echo htmlspecialchars($str4);
echo "<br>";
echo htmlspecialchars(strip_tags($str4, ['<p>', '<b>']));
?>
<?= doTitle('45 форматный вывод, функции printf, explode, implode'); ?>
<?php
printf("Первое число - %d", 26);

$red = 255;
$green = 255;
$blue = 100;
echo "<br>";
printf('#%X%X%X', $red, $green, $blue);

echo "<br>";
$str5 = 'Имя, Фамилия, e-mail';
echo '<pre>';
print_r(explode(', ', $str5));
echo '</pre>';
?>
<?= doTitle('46 Работа с JSON на языке PHP'); ?>
<?php
$arr2 = [
    'name' => 'Petr',
    'phones' => ['888', '777'],
];

$encoderArr = json_encode($arr2);
echo $encoderArr;
echo '<pre>';
print_r(json_decode($encoderArr, true));
echo '</pre>';
?>
<?= doTitle('47 Передача параметров методом GET на языке'); ?>
<?php
echo '<pre>';
print_r($_GET);
echo '</pre>';
$url = 'http://user:pass@www.site.ru/path/index.php?var=value#anch';
echo $url;
echo '<pre>';
print_r(parse_url($url));
echo '</pre>';
?>
<?= doTitle('48 Валидация формы и отправка параметров методом POST'); ?>
<form method="GET">
    <input type="text" name="first"><br>
    <input type="text" name="second"><br>
    <input type="submit" value="Send">
</form>
<?php
// if (empty($_GET['first']) && empty($_GET['second'])) {
//     exit('Текстовые поля не заполнены');
// } else {
//     echo '<pre>';
//     print_r($_GET);
//     echo '</pre>';
// }
?>
<?= doTitle('49 Работа с элементами формы checkbox, radio, select'); ?>
<form action="checkbox.php" method="POST">
    <input type="checkbox" value="1" name="html" checked> Я знаком с HTML<br>
    <input type="checkbox" value="2" name="css"> Я знаком с CSS<br>
    <input type="checkbox" name="JS"> Я знаком с JS<br>
    <input type="checkbox" name="php"> Я знаком с PHP<br>
    <select name="fst[]" multiple size="3">
        <option value="one">One</option>
        <option value="two">Two</option>
        <option value="three">Three</option>
    </select><br>
    <input type="radio" name="mark" value="1">1<br>
    <input type="radio" name="mark" value="2">2<br>
    <input type="radio" name="mark" value="3">3<br>
    <input type="radio" name="mark" value="4">4<br>
    <input type="submit" value="Send">
</form>
<?= doTitle('50 Загрузка файлов на сервер'); ?>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
</svg>
Форма для загрузки файлов<br>
<form action="scrtipt.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="filename">
    <input type="submit" value="Send">
</form>
<?php


?>
<?php require "./footer.php";
