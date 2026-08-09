<?php
/*
15. Triangle validity and type 
Description: Given three sides, determine if they form a valid triangle and if it’s equilateral, 
isosceles, or scalene. 
Rule: Sum of any two sides > third side. 
Example: 
Input: 
3, 4, 5 
Output: 
Valid triangle, Scalene 
*/
class TriangleChecker
{
  public function isTriangle(int $side1, int $side2, int $side3): bool
  {
    if (
      $side1 + $side2 > $side3 &&
      $side1 + $side3 > $side2 &&
      $side2 + $side3 > $side1
    ) {
      return true;
    } else {
      return false;
    }
  }
}
