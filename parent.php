<?php

require_once "Data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner(). PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner(). PHP_EOL;
echo $rectangle->parentGetCorner(). PHP_EOL;

?>