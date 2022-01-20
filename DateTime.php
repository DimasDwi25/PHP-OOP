<?php 

$date = new DateTime();
//mengubah tanggal
$date->setDate(2001,6,12);
//mengubah jam
$date->setTime(10,10,10);

//menambah tahun
$date->add(new DateInterval("P1Y"));

//mengurangi
$minOneMonth = new DateInterval("P1M");
$minOneMonth->invert = 1;
$date->add($minOneMonth);

var_dump($date);

$now = new DateTime();
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->format("Y-m-d h:i:s");

echo "Waktu saat ini string $string". PHP_EOL;

$dateTime = DateTime::createFromFormat("Y-m-d h:i:s", "2022-01-14 10:10:10",new DateTimeZone("Asia/Jakarta"));
var_dump($dateTime);