<?php 

$matches = [];

$result = (bool)preg_match_all("/Dimas|Dwi|Santo/i", "Dimas Dwi Susanto", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|babi/i", "***", "Dasar lu anjing babi");

var_dump($result);

$result = preg_split("/[\s,-]/", "Dimas Dwi Susanto,Programmer zaman-now");

var_dump($result);