<?php

namespace Data;

use PDO;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

interface Car extends HasBrand,IsMaintenance
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car,Ismaintenance,HasBrand
{
    public function drive(): void
    {
        echo "Mengendarai Avanza". PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand():string
    {
        return "toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}

?>