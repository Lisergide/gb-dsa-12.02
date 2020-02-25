<?php

/*Дан массив из n элементов, начиная с 1. Каждый следующий элемент равен (предыдущий + 1).
Но в массиве гарантированно число пропущено. Необходимо вывести на экран пропущенное число.*/

$arr = [1, 2, 3, 4, 5, 6, 8, 9, 10];
$missedNumbers = [];

function findMissingNumber(array $arr)
{
    if (!count($arr)) {
        return $missedNumbers[] = 1;
    } else {
        foreach ($arr as $id => $number) {

            if (!isset($arr[$id + 1])) {
                continue;
            }

            if ($arr[$id + 1] - $number !== 1) {
                for ($i = 1; $i < $arr[$id + 1] - $number; $i++) {
                    return $missedNumbers[] = $arr[$id + 1] - $i;
                }
            }
        }
    }
    return 0;
};


echo findMissingNumber($arr) . ' - пропущенное число';