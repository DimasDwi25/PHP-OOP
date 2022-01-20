<?php 

require_once "Data/SayGoodBye.php";

use Data\traits\{Person,SayHello,GoodBye,hasName};

$person = new Person();
$person->sayGoodBye("Dimas");
$person->Hello("Dimas");

$person->name = "Dimas";
var_dump($person);

$person->run();

?>