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
  public function isNegative(int $number): bool
  {
    if ($number >= 0) {
      return true;
    } else {
      return false;
    }
  }
}
