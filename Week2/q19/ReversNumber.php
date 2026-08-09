<?php
/*
19. Reverse a number 
Description: Reverse the digits of an integer. 
Example: 
Input: 
1234 
Output: 
4321
*/
class Revers
{
  public function revers_Number_And_String($given)
  {
    if (is_float($given)) {
      return "invalid input..";
    } else {
      $str = (string)$given;
      $reversed = "";

      for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
      }
      return $reversed;
    }
  }
}
