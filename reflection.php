<?php 

require_once "Data/LoginRequest.php";
require_once "exception/ValidationException.php";
require_once "Helper/ValidationUtility.php";

$request = new LoginRequest();
$request->name = "Dimas";
$request->password = "Rahasia";

ValidationUtility::ValidateReflection($request);
