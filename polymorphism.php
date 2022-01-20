<?php

require_once "Data/Programmer.php";

$company = new Company();

$company->programmer = new BackendProgrammer("Dimas");
var_dump($company);
$company->programmer = new FrontendProgrammer("Dwi");
var_dump($company);
$company->programmer = new Programmer("Susanto");
var_dump($company);

sayHelloProgrammer(new Programmer("Dimas"));
sayHelloProgrammer(new BackendProgrammer("Dimas"));
sayHelloProgrammer(new FrontendProgrammer("Dimas"));


?>