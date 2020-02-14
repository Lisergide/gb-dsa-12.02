<?php

/*
 * Простые делители числа 13195 - это 5, 7, 13 и 29. 
 * Каков самый большой делитель числа 600851475143, являющийся простым числом?
 */


$number = 13195;
$arrayOfDividers = [];
$array = [];

for ($i = 2; $i < $number; $i++) {
    if ($number % $i == 0) {
       for ($j = 2; $j < $i; $j++) {
           if ($i % $j == 0) {
               $array[] = $j;
           }
       }
       if (empty($array)) {
           $arrayOfDividers[1] = $i;
       }
    }
}
print_r($arrayOfDividers);