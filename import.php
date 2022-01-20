<?php

require_once "Data/Confict.php";
require_once "Data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict = new Conflict();
$conflict2 = new \Data\Two\Conflict();

helpMe();

echo APPLICATION. PHP_EOL;

?>