<?php
/*
16. Print numbers from 1 to 100 
Description: Use a loop to print num\bers sequentially. 
Example: 
Output: 
1, 2, 3, …, 100 
*/

class PrintNumber
{
  public function printNumbers($givenNumber)
  {
    if (is_float($givenNumber)) {
      echo "Invalid input.";
    }
    //the positive requests
    else if ($givenNumber >= 0) {
      for ($i = 0; $i <= $givenNumber; $i++) {
        if ($i < $givenNumber) {
          echo $i . ", ";
        } else {
          echo $i;
        }
      }
    } //the negative requests
    else {
      for ($i = 0; $i >= $givenNumber; $i--) {
        if ($i > $givenNumber) {
          echo $i . ", ";
        } else {
          echo $i;
        }
      }
    }
  }
}
