<?php
/*Esmatullah
8. Determine if a number is positive, negative, or zero
Description: Use if-else statements to categorize a number.
Example:
Input: -3
Output:
Negative */

class CheckNumber
{
  public function checkNumberSign(int $number)
  {
    if ($number > 0) {
      return "positive";
    } else if ($number < 0) {
      return "Negative";
    } else {
      return "The NUMBER is Zero !!!!";
    }
  }
}
