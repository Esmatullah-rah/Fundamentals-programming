<?php
/*
23. Fibonacci series up to N terms 
Description: Generate the Fibonacci sequence (0, 1, 1, 2, 3, 5, 8…) up to N terms. 
Example: 
Input: 
7 
Output: 
0, 1, 1, 2, 3, 5, 8 
*/
class Fibonacci
{
  public function findFibonicci(int $number)
  {
    $last = 1;
    $fibonaccis = [0];
    for ($i = 0; $i < $number - 1; $i++) {
      $newIndex = $last + $fibonaccis[$i];
      $fibonaccis[] = $newIndex;
      $last = $fibonaccis[$i];
    }
    return $fibonaccis;
  }
}
