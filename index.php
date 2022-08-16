<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= '00061-pet-PHP-basic'; ?></title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- les 1 -->
    <?php echo 'les 1 --> ' . 'Current date: ';
    echo date(DATE_RSS); ?>
    <br>
    <?php if (mt_rand(0, 1)) { ?>
        <div style="color: blue;">Blue text</div>
    <?php } else { ?>
        <div style="color: red;">Red text</div>
    <?php } ?>
    <br><br>
    <!-- les 2 -->
    <?= 'les 2 --> '; ?>
    <?php require './second.php'; ?>
    <br>
    <?php include './second.php'; ?>
    <br><br>
    <!-- les 3 -->

    <?= 'les 3 --> ' .
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
     */ </pre>"

    ?>
    <br><br>
    <!-- les 4 -->
    <?php
    $var = 4;
    $var2 = "test";
    echo 'les 4 --> ' . "some text $var2 <br>";
    echo "some text {$var}2 <br>";
    echo 'some text $var <br>';
    echo `dir`; // для управления командами из ОС
    ?>
    <br><br>
    <!-- les 5 -->
    <?php
    $user = "John";
    if (isset($user))
        echo 'les 5 --> ' . "Variable exists";
    else
        echo "Variable doesn't exist";
    ?><br>
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
    <br><br>
    <!-- les 6 -->
    <?php
    $str = "45.2qwe";
    $number = $str - 12;
    echo 'les 6 --> ' . $number;
    ?>
    <br><br>
    <!-- les 7 -->
    <?php
    $float = 3.4;
    $number2 = (int) $float;
    echo  'les 7 --> ' . $number2;
    ?>
    <br><br>
    <!-- les 8 -->
    <?= 'les 8 --> ' . 'is_numeric - ' . is_numeric("123"); ?>
    <br><br>
    <!-- les 9 - 10 -->
    <?= 'les 9 - 10 --> ' . round(4.893434, 2); ?><br>
    <?= ceil(4.893434); ?><br>
    <?= floor(4.893434); ?>
    <br><br>
    <!-- les 11 -->
    <?php

    ?>
    <br><br>
    <!-- les * -->
    <?php

    ?>
    <br><br>

    <script src="./script.js"></script>
</body>

</html>