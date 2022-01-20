<?php 

require_once "exception/ValidationException.php";
require_once "Data/LoginRequest.php";
require_once "Helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->name = "Dimas";
$loginRequest->password = " ";

try
{
    validateLoginRequest($loginRequest);
    echo "Valid". PHP_EOL;
} catch(ValidationException | Exception $exception)
{
    echo "Error : {$exception->getMessage()}".PHP_EOL;

    //gettrace (array)
    var_dump($exception->getTrace());

    //sebagai string
    var_dump($exception->getTraceAsString());
} finally
{
    echo "Error atau tidak akan tetap dijalankan".PHP_EOL;
}

