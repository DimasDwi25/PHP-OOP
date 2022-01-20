<?php

class Programmer 
{
    var string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{
    //echo "Halo $programmer->name". PHP_EOL;

    //pengecekan tipe data objek
    if($programmer instanceof FrontendProgrammer)
    {
        echo "Halo Frontend Programmer $programmer->name". PHP_EOL;
    } else if($programmer instanceof BackendProgrammer)
    {
        echo "Halo Backend Programmer $programmer->name". PHP_EOL;
    } else if($programmer instanceof Programmer )
    {
        echo "Halo Programmer $programmer->name". PHP_EOL;
    }
}

?>