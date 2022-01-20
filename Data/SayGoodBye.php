<?php 

namespace Data\traits;

trait GoodBye
{
    public function sayGoodBye(?string $name): void
    {
        if(is_null($name))
        {
            echo "Good Bye".PHP_EOL;
        } else
        {
            echo "Good Bye $name".PHP_EOL;
        }
    }

}

trait SayHello
{
    public function Hello(string $name): void
    {
        if(is_null($name))
        {
            echo "Hello".PHP_EOL;
        } else
        {
            echo "Hello $name".PHP_EOL;
        }
    }
}

trait hasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{
    public function sayGoodBye(?string $name): void
    {
        echo "Good bye in person". PHP_EOL;
    }

    public function Hello(string $name): void
    {
        echo "Hello in person". PHP_EOL;
    }
}

trait All
{
    use GoodBye,hasName,SayHello,CanRun{
        //bisa di override
        //Hello as private;
        //sayGoodbye as private;
    }
}

class person 
{
    use All;

    public function run(): void
    {
        echo "Person Still Run".PHP_EOL;
    }
    
}

?>