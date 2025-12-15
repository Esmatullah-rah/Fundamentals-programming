<?php
/* 
17. Sum of first N natural numbers 
Description: Calculate and print the sum using a loop. 
Example: 
Input: 
5 
Output: 
15 
*/
class NaturalNumber
{
  public function naturalSum(int $number)
  {
    if ($number <= 0) {
      return "invalid input.";
    }
    $sum = 0;
    for ($i = 0; $i <= $number; $i++) {
      $sum += $i;
    }

    return $sum;
  }
}

$obj = new NaturalNumber;
echo $obj->naturalSum(6);
