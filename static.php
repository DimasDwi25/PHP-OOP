<?php 

require_once "Helper/Helper.php";

use Helper\MatHelper;

echo MatHelper::$name. PHP_EOL;

MatHelper::$name = "Dimas Dwi";

echo MatHelper::$name. PHP_EOL;

echo MatHelper::sum(5,5,5,5,5). PHP_EOL;

?>