<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= '00061-pet-PHP-basic'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <ul class="navbar-nav">
                <!-- <li class="nav-item"><a class="nav-link" href="./index.php">Home</a></li> -->
                <li class="nav-item"><a class="nav-link" href="./1-10les.php">1-(1-10)-les</a></li>
                <li class="nav-item"><a class="nav-link" href="./2-10les.php">2-(11-20)-les</a></li>
                <li class="nav-item"><a class="nav-link" href="./3-10les.php">3-(21-30)-les</a></li>
                <li class="nav-item"><a class="nav-link" href="./4-10les.php">4-(31-40)-les</a></li>
                <li class="nav-item"><a class="nav-link" href="./5-10les.php">5-(41-50)-les</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href=".\test1\index.php">test1-page</a></li> -->
            </ul>
        </div>
    </nav>
    <div class="container mt-5 pt-5">
        <?php
        function doTitle($text)
        {
            $text = "<h3>Les $text </h3>";
            return $text;
        }
        ?>