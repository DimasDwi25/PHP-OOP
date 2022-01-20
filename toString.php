<?php 

require_once "Data/Student.php";

$student = new Student();
$student->id = "1";
$student->name = "Dimas";
$student->value = 25;

echo $student. PHP_EOL;

//bisa seperti ini
$string = (string)$student;

echo $string.PHP_EOL;