<?php
class Animal
{
    public $food, $location, $noise;
    function __construct($food, $location, $noise)
    {
        $this->food = $food;
        $this->location = $location;
        $this->noise = $noise;
    }
    function makeNoise()
    {
        echo 'Она делает так: '.$this->noise."<br>";
    }
    function eat()
    {
        echo 'Она ест это: '.$this->food."<br>";
    }
    function sleep()
    {
        echo 'Она спит здесь: '.$this->location."<br>";
    }
}
class dog extends Animal
{
    public $name, $age;
    function __construct($name, $age, $food, $location, $noise)
    {
        $this->name = $name;
        $this->age = $age;
        parent::__construct($food, $location, $noise);
    }
    function displayInfo()
    {
        echo "<br>"."Собака:"."<br>"."Имя: ".$this->name."<br>"."Возраст: ".$this->age."<br>";
        parent::makeNoise();
        parent::eat();
        parent::sleep();
    }
}
class cat extends Animal
{
    public $name, $age;
    function __construct($name, $age, $food, $location, $noise)
    {
        $this->name = $name;
        $this->age = $age;
        parent::__construct($food, $location, $noise);
    }
    function displayInfo()
    {
        echo "<br>"."Кошка:"."<br>"."Имя: ".$this->name."<br>"."Возраст: ".$this->age."<br>";
        parent::makeNoise();
        parent::eat();
        parent::sleep();
    }
}
class horse extends Animal
{
    public $name, $age;
    function __construct($name, $age, $food, $location, $noise)
    {
        $this->name = $name;
        $this->age = $age;
        parent::__construct($food, $location, $noise);
    }
    function displayInfo()
    {
        echo "<br>"."Лошадь:"."<br>"."Имя: ".$this->name."<br>"."Возраст: ".$this->age."<br>";
        parent::makeNoise();
        parent::eat();
        parent::sleep();
    }
}
$dog = new dog("Бак", 5, "мясо", "будка", "гав");
$dog->displayInfo();
$cat = new cat("Марс", 3, "рыба", "кровать", "мяу");
$cat->displayInfo();
$horse = new horse("Паркер", 9, "сено", "стойло", "иго-го");
$horse->displayInfo();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    
</body>
</html>