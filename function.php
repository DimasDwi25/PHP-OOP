<?php

require_once "Data/Person.php";

$person = new Person("Dimas", "Mojokerto");

$person->sayHello(null);
//memanggil constant self keyword
$person->info();

?>