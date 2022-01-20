<?php

namespace Data;
abstract class Animal
{
    var string $name;

    abstract public function run(): void;//void = tidak mengembalikan nilai
}

class Cat extends Animal
{
    function run():void
    {
        echo "Cat $this->name is running". PHP_EOL;
    }
}

class Dog extends Animal
{
    function run():void
    {
        echo "Dog $this->name is running". PHP_EOL;
    }
}

?>