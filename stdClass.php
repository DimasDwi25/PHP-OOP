<?php 

$array = [
    "firstName" => "Dimas",
    "middleName" => "Dwi",
    "lastName" => "Susanto"
];

//mengubah array ke std class/object
$object = (object) $array;
var_dump($object);

echo "First name    : $object->firstName". PHP_EOL;
echo "First name    : $object->middleName". PHP_EOL;
echo "First name    : $object->lastName". PHP_EOL;

//mengubah std class//object ke array
$array2 = (array)$object;
var_dump($array2);

require_once "Data/Person.php";

$person = new Person("Dimas", "Mojokerto");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);


?>