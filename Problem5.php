<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 27/09/2018
 * Time: 15:28
 */

/**
 *
 * Project Euler Problem 5
 */

// Total Steps
$total_steps = 20;

// Count - remove 1 step
$count = $total_steps - 1;


$i = $total_steps;

while (true)
{
    if ($i % $count == 0)
    {

        // Remove the divide by 0 error
        if ($count == 1)
        {
            break;
        }

        // Go down a step
        $count--;

        // Update the step with new number
        $total_steps = $i;
    } else {
        $i += $total_steps;
    }
}

echo $i;