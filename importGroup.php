<?php

require_once "Data/Confict.php";
require_once "Data/Helper.php";

use Data\One\{Conflict,Sample,Dummy};
use Helper\{helpMe};

use function Helper\helpMe;

$conflict1 = new Conflict();
$sample = new Sample();
$dummy = new Dummy();

helpMe();

?>