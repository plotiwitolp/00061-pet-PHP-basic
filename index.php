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
    <?php echo 'Current date: ';
    echo date(DATE_RSS); ?>
    <br>
    <?php if (mt_rand(0, 1)) { ?>
        <div style="color: blue;">Blue text</div>
    <?php } else { ?>
        <div style="color: red;">Red text</div>
    <?php } ?>
    <br><br>
    <!-- les 2 -->
    <?php require './second.php'; ?>
    <br>
    <?php include './second.php'; ?>
    <br><br>
    <!-- les 3 -->
    <?php
    /** DATA TYPES:
     * boolean
     * integer
     * float
     * string
     * array
     * object
     * resource (exm: file)
     * NULL
     */
    ?>
    <br><br>
    <!-- les 4 -->
    <?php
    $var = 4;
    $var2 = "test";
    echo "some text $var2 <br>";
    echo "some text {$var}2 <br>";
    echo 'some text $var <br>';
    echo `dir`; // для управления командами из ОС
    ?>
    <br><br>
    <!-- les 5 -->
    <?php
    $user = "John";
    if (isset($user))
        echo "Variable exists";
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

    ?>
    <br><br>
    <!-- les * -->
    <?php

    ?>
    <br><br>

    <script src="./script.js"></script>
</body>

</html>