<?php

/**
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
*/

function pf($n){
  $result = [];
  $init   = 2;

  while($n !== 1){
    $i = $init;

    while($i < 0xFFFFFF){
      if($n % $i == 0){
        $result[] = $i;
        $n /= $i;
        break;
      }
      $i++;
    }
    $init = $i;
  }

  return $result;
}

$array = pf(600851475143);
$result = end($array);

echo $result;  # >> 6857
