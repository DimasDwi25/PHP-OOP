<?php

require_once "Data/Location.php";

use Data\{Location,City,Country,Province};

//$abstractClass = new Location(); ERROR

$location = new City();
$location = new Country();
$location = new Province();

?>