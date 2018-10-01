<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 01/10/2018
 * Time: 09:59
 */

/**
 *
 * Project Euler Problem 6
 */


$max = 100;
$sum = 0;
$number = 0;

for ($i = 1; $i <= $max; $i++)
{
    // Save the number value of $i and increment
    $number += $i;

    // Save the squared number of $i;
    $sum += $i * $i;
}

// Multiply the value of $number together and then subtract the value of $sum
echo $number * $number - $sum;