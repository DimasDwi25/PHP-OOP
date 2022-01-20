<?php

class Person
{
    //
    const AUTHOR = "Dimas";

    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address)
    {
        //
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        //
        if( is_null($name) )
        {
            echo "hi my name is $this->name". PHP_EOL;
        } else
        {
            echo "hi $name, my name is $this->name";
        }
        
    }

    function info()
    {
        //self keyword
        echo "AUTHOR : ". self::AUTHOR. PHP_EOL;
    }

    function __destruct()
    {
        echo "Object person $this->name destroyed". PHP_EOL;
    }
}

?>