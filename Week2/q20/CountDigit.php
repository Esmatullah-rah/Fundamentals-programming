<?php
/*
20. Count digits in a number 
Description: Find how many digits are in a number. 
Example: 
Input: 
786 
Output: 
3
*/
class CountDigit
{
  public function countNumberDigits($number)
  {
    if (is_int($number)) {
      $number = abs($number);
      $strNumber = (string) $number;

      $length = strlen($strNumber);

      return $length;
    } else {
      return "invalid input...";
    }
  }
}
