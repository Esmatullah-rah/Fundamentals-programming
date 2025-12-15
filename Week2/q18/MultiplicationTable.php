<?php
/*18. Multiplication table of a number 
Description: Print the multiplication table for a given number (up to 10 or N). 
Example: 
Input: 
5 
Output: 
5 × 1 = 5 
5 × 2 = 10 
… 
5 × 10 = 50 
*/
class MultiplicationTable
{
  public function print_Multiplication_Table_Of_One_Number($number)
  {
    if (is_float($number) || $number <= 0) {
      echo "invalid input.";
    } else {
      for ($i = 1; $i <= 10; $i++) {
        echo $number . " X " . $i . " =  " . $i * $number . "\n";
      }
    }
  }
}
