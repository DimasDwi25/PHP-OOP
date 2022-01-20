<?php

require_once "Data/Animal.php";

use Data\{Animal,Cat,Dog};

$animal = new Cat();
$animal->name = "Luna";
$animal->run();

$animal = new Dog();
$animal->name = "Doggy";
$animal->run();


?>