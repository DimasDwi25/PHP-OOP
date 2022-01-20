<?php

require_once "Data/Person.php";

$person = new Person("Dimas", "Mojokerto");
//$person->name = "Dimas";
//$person->address = "Mojokerto";
//$person->country = "Indonesia";

echo "Nama : {$person->name} ". PHP_EOL;
echo "Address : {$person->address} ". PHP_EOL;
echo "Country : {$person->country}". PHP_EOL;

var_dump($person);

?>