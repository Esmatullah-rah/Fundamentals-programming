/* Esmatullah
1. Swap two variables without using a temporary variable
Description: Write a program to swap the values of two variables (e.g., a and b) without using a
third variable.
Example:
Input:
a = 5, b = 10
Output:
a = 10, b = 5
*/
<?php
class SwapTwoNumbers
{
  function swap(int $a, int $b): void
  {
    $a += $b;
    $b = $a - $b;
    $a = $a - $b;
    echo "A is {$a} and B is {$b}";
  }
}

$obj = new SwapTwoNumbers;
$obj->swap(5, 10);
$obj->swap(-5, 7);
$obj->swap(50, 18);
$obj->swap(-9, 110);
$obj->swap(45, 1);
