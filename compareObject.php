<?php 

require_once "Data/Student.php";


$students = new Student();
$students->id = "1";
$students->name = "Dimas";
$students->value = 25;


$students2 = new Student;
$students2->id = "1";
$students2->name = "Dimas";
$students2->value = 25;


//compare object
var_dump($students == $students2);
var_dump($students === $students2);