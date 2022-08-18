<?php require './header.php'; ?>

<?php echo doTitle(1) . 'Current date: ';
echo date(DATE_RSS); ?>
<br>
<?php if (mt_rand(0, 1)) { ?>
    <div style="color: blue;">Blue text</div>
<?php } else { ?>
    <div style="color: red;">Red text</div>
<?php } ?>
<br>

<?= doTitle(2); ?>
<?php require './second.php'; ?>
<br>
<?php include './second.php'; ?>
<br>

<?= doTitle(3) .
    "<pre>
    /** DATA TYPES:
     * boolean
     * integer
     * float
     * string
     * array
     * object
     * resource (exm: file)
     * NULL
     */</pre>"
?>

<?= doTitle(4); ?>
<?php
$var = 4;
$var2 = "test";
echo "some text $var2 <br>";
echo "some text {$var}2 <br>";
echo 'some text $var <br>';
echo "<pre>";
echo `dir`; // для управления командами из ОС
echo "</pre>";
?>
<br>

<?= doTitle(5); ?>
<?php
$user = "John";
if (isset($user))
    echo "Variable exists";
else
    echo "Variable doesn't exist";
?>
<?= doTitle(6); ?>
<?php
$str1 = "";
if (empty($str1))
    echo "String is empty";
else
    echo "String is not empty";
?>
<br><?= gettype(123); ?>
<br><?= gettype(123.1); ?>
<br><?= gettype(true); ?>
<br><?= gettype(""); ?>
<br><?= gettype(NULL); ?>
<br><?= gettype(array()); ?>
<br>

<?= doTitle(7); ?>
<?php
$str = "45.2qwe";
$number = $str - 12;
echo $number;
?>
<br>

<?= doTitle(8); ?>
<?php
$float = 3.4;
$number2 = (int) $float;
echo  $number2;
?>
<br>

<?= doTitle(9); ?>
<?= 'is_numeric - ' . is_numeric("123"); ?>
<br>

<?= doTitle(10); ?>
<?= round(4.893434, 2); ?><br>
<?= ceil(4.893434); ?><br>
<?= floor(4.893434); ?>
<br>
<?php require "./footer.php";
