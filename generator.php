<?php 

function getGenap(int $nilai): Iterator
{
    $array = [];

    for($i=1; $i<=$nilai; $i++)
    {
        if($i % 2 == 0)
        {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}

foreach(getGenap(10) as $value)
{
    echo "Genap : $value". PHP_EOL;
}

//menggunakan yield generator
function getGanjil(int $nilai): Iterator
{

    for($i=1; $i<=$nilai; $i++)
    {
        if($i % 2 == 1)
        {
            yield $i;
        }
    }
}

foreach(getGanjil(10) as $value)
{
    echo "Genap : $value". PHP_EOL;
}