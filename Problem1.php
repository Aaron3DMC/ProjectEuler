<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 27/09/2018
 * Time: 10:48
 */

// Assign sum to 0 so we can keep track of the results.
$sum = 0;

for ($i = 0; $i < 1000; $i++)
{
    // If $i can be divided by 3 or 5 then $sum = $sum + $i
    if ($i % 3 == 0 || $i % 5 == 0)
    {
        $sum += $i;
    }
}

// Return the total sum.
echo $sum;
