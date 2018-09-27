<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 27/09/2018
 * Time: 11:28
 */

/**
 *
 * Project Euler Problem 2
 */

// Starting Values
$x = 2;
$y = 1;

$sum = 2;

// Incremental Value
$n = 0;

while ($n < 4000000)
{
    $n = $x + $y;
    $y = $x;
    $x = $n;

    if ($n % 2 == 0)
    {
        $sum += $n;
    }
    $n++;
}

echo 'Answer: '.$sum;
