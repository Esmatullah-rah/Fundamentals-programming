<?php
/*
24. Find GCD of two numbers 
Description: Compute the greatest common divisor using repeated subtraction or the Euclidean 
algorithm. 
Example: 
Input: 
12, 18 
Output: 
6 
*/

// GCD means greatest common divisor
class GCDDitector
{
  public function findGCD($number1, $number2)
  {
    if (!is_numeric($number1) || !is_numeric($number2)) {
      return "invalid input....";
    } else if ($number1 < 0 || $number2 < 0) {
      return "invalid input....";
    }

    $smallerNum = $number1 < $number2 ? $number1 : $number2;

    for ($i = $smallerNum; $i > 0; $i--) {
      if ($number1 % $i == 0 && $number2 % $i == 0) {
        $GCD = $i;
        break;
      }
    }
    if ($GCD !== 1) {

      return $GCD;
    } else {
      //the emoji created with pressing win + greater than sign
      return "those numbers don't have GCD.🔪";
    }
  }
}
