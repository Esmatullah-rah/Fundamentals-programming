/* Esmatullah

2. Find the largest and smallest of three numbers
Description: Read three integers and print the largest and smallest.
Example:
Input:
3, 9, 5
Output:
Largest: 9, Smallest: 3

*/

<?php
class FindLargestAndSmallest
{
  public function findMaxAndMin(array $numbers): void
  {
    //declare and intilize the min and max
    $max = $numbers[0];
    $min = $numbers[0];

    $length = count($numbers);

    //handle min and max
    for ($i = 0; $i < $length; $i++) {
      if ($numbers[$i] > $max) {
        $max = $numbers[$i];
      } elseif ($numbers[$i] < $min) {
        $min = $numbers[$i];
      }
    }
    echo 'Max is ' . $max . ' and Min is ' . $min;
  }
}
