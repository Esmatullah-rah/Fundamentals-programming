<?php
/*
21. Sum of digits 
Description: Calculate the sum of all digits of a number. 
Example: 
Input: 
123 
Output: 
6 
*/
class DigitSum
{
  public function calculateDigitsSum($number)
  {
    if (is_numeric($number) && !is_float($number)) {
      $strNumber = (string) $number;
      $length = strlen($strNumber);
      $sum = 0;

      for ($i = 0; $i < $length; $i++) {
        $sum += $strNumber[$i];
      }
      return $sum;
    } else {
      return "invalid input...";
    }
  }
}
