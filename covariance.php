<?php 

require_once "Data/Animal.php";
require_once "Data/AnimalShelter.php";

$catShelter = new Data\CatShelter();
$cat = $catShelter->adopt("Luna");

$dogShelter = new Data\DogShelter();
$dog = $dogShelter->adopt("Doggy");