<?php
/*
25. Find LCM of two numbers 
Description: Compute least common multiple using the relationship: LCM(a, b) = (a × b) / 
GCD(a, b) 
Example: 
Input: 
12, 18 
Output: 
36 
*/
class LCMDitector
{
  public function findLCM(int $number1, int $number2)
  {
    //find smaller number for finding GCD
    $smallerNum = $number1 > $number2 ? $number1 : $number2;

    for ($i = $smallerNum; $i > 0; $i--) {
      if ($number1 % $i == 0 && $number2 % $i == 0) {
        $GCD = $i;
        break;
      }
    }
    //if had GCD
    if ($GCD !== 1) {
      $LCM = $number1 * $number2 / $GCD;
      //if had LCM
      if ($LCM) {
        //the answare
        return $LCM;
      }
    } else {
      //the emoji created with pressing win + greater than sign
      return "those numbers don't have greatest common divisor.🔪";
    }
  }
}
