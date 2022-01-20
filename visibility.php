<?php

require_once "Data/Product.php";

$product = new Product("Apple", 2000);
echo $product->getName(). PHP_EOL;
echo $product->getPrice(). PHP_EOL;

$Dummy = new ProductDummy("Asus", 1000);
$Dummy->info();

?>