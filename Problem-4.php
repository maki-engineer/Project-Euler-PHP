<?php

/**
 * A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
*/

$result = 0;

for($leftNum = 100; $leftNum < 1000; $leftNum++){
  for($rightNum = 100; $rightNum < 1000; $rightNum++){
    $searchNum          = $leftNum * $rightNum;
    $searchArray        = str_split($searchNum);
    $reverseSearchArray = (int) implode('', array_reverse($searchArray));

    if($reverseSearchArray == $searchNum){
      $result = $searchNum;
    }
  }
}

echo $result;  # >> 580085
