<?php

require_once "Data/Category.php";

$category = new Category();
$category->setName("PC");
$category->setExpensive(true);

echo "Name      : {$category->getName()}". PHP_EOL;
echo "Expensive : {$category->getExpensive()}".PHP_EOL;

?>