<?php
/*
22. Print even numbers in a range 
Description: Input start and end values, print all even numbers between them. 
Example: 
Input: 
1, 10 
Output: 
2, 4, 6, 8, 10 
*/
class EvenNumbers
{
  public function findEvenNumbers(int $from, int $till)
  {

    $evens = [];
    $length = $till - $from;
    for ($i = 0; $i <= $length; $i++) {
      if ($from % 2 == 0) {
        $evens[] = $from;
      }
      $from++;
    }
    return $evens;
  }
}
