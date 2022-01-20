<?php 

class Zero
{
    //membuat dinamik properti overloading
    private array $properties = [];

    //mengambil data berdasarkan properti $name
    public function __get($name)
    {
        return $this->properties[$name];
    }

    //mengubah data berdasarkan properti $name
    public function __set($name, $value)
    {
        return $this->properties[$name] = $value;
    }
    
    //untuk mengecek apakah sudah di cek berdasarkan properti $name
    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    //untuk mengunset/menghapus berdasarkan properti $name
    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    //function overloading
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);

        echo "Call function $name with arguments $join". PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);

        echo "Call STATIC function $name with arguments $join". PHP_EOL;
    }

}

$zero = new Zero();

$zero->firstName = "Dimas";
$zero->middleName = "Dwi";
$zero->lastName = "Susanto";

echo "First Name    : $zero->firstName". PHP_EOL;
echo "Middle Name   : $zero->middleName". PHP_EOL;
echo "Last Name     : $zero->lastName". PHP_EOL;

//function overloading

$zero->sayHello("Dimas","Dwi");
Zero::sayHello("DIMAS","DWI");