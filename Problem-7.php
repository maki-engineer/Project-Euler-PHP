<?php

/**
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
 *
 * What is the 10 001st prime number?
*/

$result = 0;
$num    = 2;
$count  = 0;


while (true) {
  $isPrimeNum = true;

  for ($i = 2; $i < $num; $i++) {
    if ($num % $i === 0) {
      $isPrimeNum = false;
      break;
    }
  }

  if ($isPrimeNum) {
    $count++;
    if ($count === 10001) break;
  }

  $num++;
}

$result = $num;

echo $result;  # >> 104743
