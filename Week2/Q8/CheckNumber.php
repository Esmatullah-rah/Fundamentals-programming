/*Esmatullah
8. Determine if a number is positive, negative, or zero
Description: Use if-else statements to categorize a number.
Example:
Input: -3
Output:
Negative */

<?php
class CheckNumber
{
  public function isNegative(int $number)
  {
    if ($number > 0) {
      echo $number . " is positive. ";
    } else {
      echo $number . " is negative. ";
    }
  }
}
