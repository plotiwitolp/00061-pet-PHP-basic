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
<?php require "./footer.php";
