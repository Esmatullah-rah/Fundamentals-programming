<?php
/* Esmatullah
7. Check whether a number is even or odd
Description: Determine if a number is divisible by 2.
Example:
Input:
7
Output:
Odd */


class OddOrEven
{
  public function isOdd(int $number): bool
  {
    if ($number % 2 !== 0) {
      return true;
    } else {
      return false;
    }
  }
}
