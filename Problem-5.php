<?php

/**
 * 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
*/

$result     = 20;

while (true) {
  $notSeached = false;

  for ($i = 20; $i > 10; $i--) {
    if ($result % $i !== 0) {

      $notSeached = true;
      break;

    }
  }

  if ($notSeached) {

    $result++;

  } else {

    break;

  }
}

echo $result;  # >> 232792560
