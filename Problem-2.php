<?php

/**
 * Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be: 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
 * By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.
*/

$array  = [1, 2];
$i      = 2;
$result = 0;

while($num <= 4_000_000){
  $num = 0;

  $num += $array[$i - 1] + $array[$i - 2];

  if($num > 4_000_000){
    break;
  }

  if($num % 2 == 0){
    $result += $num;
  }

  array_push($array, $num);

  $i++;
}

echo $result;  # >> 4613730
