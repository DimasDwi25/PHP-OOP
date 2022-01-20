<?php 

require_once "Data/Student.php";

$student = new Student();
$student->id = "1";
$student->name = "Dimas";
$student->value = 25;
$student->getSample("SAMPLE");

var_dump($student);