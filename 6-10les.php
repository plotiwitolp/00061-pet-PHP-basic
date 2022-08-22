<?php require './header.php'; ?>
<!-- ----------------------- -->
<?= doTitle('51 Форма обратной связи на языке PHP и отправка письма на почту'); ?>
<form action="./sendmail.php" method="POST">
    <select name="subject">
        <option disabled selected>Тема письма</option>
        <option value="1">Вопрос 1</option>
        <option value="2">Вопрос 2</option>
        <option value="3">Вопрос 3</option>
    </select><br><br>
    <input type="email" name="email" placeholder="Enter your email" maxlength="50" required><br><br>
    <!-- required - чтобы input был обязательный для заполнения -->
    <textarea name="message" placeholder="Enter message" maxlength="150" required></textarea><br><br>
    <img src="./capcha1.png"><br><br>
    <input type="number" name="capcha" placeholder="Enter capcha" maxlength="5" required><br><br>
    <input type="submit" value="Send">
</form>
<?= doTitle('52 Методы класса'); ?>
<?php
// class Hello
// {
//     public function printText()
//     {
//         return "Hello, world!";
//     }
// }
// $obj = new Hello;
// echo $obj->printText();

class Point
{
    private $x;
    private $y;
    public function setX($x)
    {
        $this->x = $x;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function distance()
    {
        return sqrt($this->getX() ** 2 + $this->getY() ** 2);
    }
}
$p1 = new Point;
$p1->setX(3);
$p1->setY(2);
echo $p1->distance();
?>
<?= doTitle('53 Конструктор класса'); ?>
<?php
class People
{
    private $name;
    public function __construct()
    {
        echo 'Вызов конструктора';
        $this->name = "John";
    }
}
$obj2 = new People;
echo '<pre>';
print_r($obj2);
echo '</pre>';

class Point2
{
    private $x;
    private $y;
    public function __construct($x = 0, $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function __toString()
    {
        return "({$this->x}, {$this->y})";
    }
}

$p2 = new Point2(10, 20);
$p3 = new Point2();

echo '<pre>';
print_r($p2);
print_r($p3);
echo '</pre>';

echo "{$p2}"; // при интерполяции выводится благодаря __toString() в классе
?>

<?= doTitle('54 Наследование и перегрузка методов'); ?>
<?php

class Animal
{
    protected $legs = 4;
    public function info()
    {
        echo "У меня {$this->legs} лапы.<br>";
    }
}

class Dog extends Animal
{
    protected $name = "Собака";
    public function voice()
    {
        echo "{$this->name} издает звук гав-гав.<br>";
    }
}

$dog = new Dog();
$dog->info();
$dog->voice();
?>
<?= doTitle('55 abstract и final классы и методы'); ?>
<?php
// перегрузка методов
abstract class Animal2 // абстрактный класс используется только для наследования, от него объект нельзя создать
{
    protected $legs = 4;
    final public function info() // final нельзя переопределять
    {
        echo "У меня {$this->legs} лапы.<br>";
    }
    abstract public function color(); // в дочерних классах обязательно должен быть определен этот метод
}

class Dog2 extends Animal2
{
    protected $name = "Собака";
    public function voice()
    {
        echo "{$this->name} издает звук гав-гав.<br>";
    }
    public function color()
    {
        return "color";
    }
}

$animal = new Dog2;
echo '<pre>';
print_r($animal);
echo '</pre>';

if ($animal instanceof Dog2) {
    echo "animal является экземпляром класса Dog2";
}
?>
<?php require "./footer.php";
