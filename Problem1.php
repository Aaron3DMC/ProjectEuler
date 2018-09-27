<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 27/09/2018
 * Time: 10:48
 */

$sum = 0;
for ($i = 0; $i < 1000; $i++)
{
    if ($i % 3 == 0 || $i % 5 == 0)
    {
        $sum += $i;
    }
}

echo $sum;
