<?php
//Сумка
$a=20;
$b=15;
$c=15;
//Товар
$d=20;
$e=10;
$f=15;

//У трехмерного объекта есть 6 возможных ориентаций

if ($a >= $d && $b >= $e && $c >= $f ||
    $a >= $d && $b >= $f && $c >= $e ||
    $a >= $e && $b >= $d && $c >= $f ||
    $a >= $e && $b >= $f && $c >= $d ||
    $a >= $f && $b >= $d && $c >= $e ||
    $a >= $f && $b >= $e && $c >= $d) echo "Можно";
else echo "Нельзя";