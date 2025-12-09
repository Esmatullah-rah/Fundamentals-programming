/* Esmatullah
7. Check whether a number is even or odd
Description: Determine if a number is divisible by 2.
Example:
Input:
7
Output:
Odd */

<?php
class OddOrEven
{
  public function isOdd(int $number)
  {
    if ($number % 2 !== 0) {
      echo $number . " is ODD. ";
    } else {
      echo $number . " is EVEN. ";
    }
  }
}
