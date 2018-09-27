<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 27/09/2018
 * Time: 13:04
 */

/**
 *
 * Project Euler Problem 3
 */

$largest = 1;
$count = 2;


for ($value = 600851475143; $value > $largest; $count++)
{
    if($value % $count == 0)
    {
        $largest = $count;

        while($value % $count == 0)
        {
            $value /= $count;
        }
    }
}

echo $largest;