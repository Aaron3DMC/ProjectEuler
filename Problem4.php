<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 27/09/2018
 * Time: 14:14
 */

/**
 *
 * Project Euler Problem 4
 */

$palindrome = 0;

for ($i = 100; $i < 999; $i++)
{
    for ($x = 100; $x < 999; $x++)
    {
        // Loop through each value and times the values together.
        $y = $i * $x;

        // If value Y is greater than 0 and value Y can be string reversed assign value to variable
        if ($y > $palindrome && $y == strrev($y))
        {
            $palindrome = $y;
        }
    }
}

// echo out the answer
echo $palindrome;
