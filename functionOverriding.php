<?php

require_once "Data/Manager.php";

$manager = new Manager();
$manager->name = "Dimas";
$manager->sayHello("dwi");

$vp = new VicePresident();
$vp->name = "Dimas";
$vp->sayHello("Susanto");

?>