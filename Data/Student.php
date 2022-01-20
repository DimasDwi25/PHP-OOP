<?php 



class Student
{
    public string $id;
    public string $name;  
    public int $value;
    private string $sample;

    public function getSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }

    public function __toString(): string
    {
        return "Student Id:$this->id, Student Name:$this->name, Student Value:$this->value";
    }

    public function __invoke(...$argument): void
    {
        $join = join(",", $argument);

        echo "Invoke Student with argument $join". PHP_EOL;
    }

    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "Dimas",
            "version" => "1.0.0"
        ];
    }
}