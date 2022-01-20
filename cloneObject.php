<?php 

require_once "Data/Student.php";


$students = new Student();
$students->id = "1";
$students->name = "Dimas";
$students->value = 25;
$students->getSample("XXX");


$students2 = clone $students;


//compare object
var_dump($students == $students2);
var_dump($students === $students2);