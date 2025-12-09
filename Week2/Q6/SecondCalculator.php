/*Esmatullah
6. Convert total seconds into hours, minutes, and seconds
Description: Convert a given number of seconds into hours, minutes, and seconds format.
Example:
Input:
3665
Output:
1 hr, 1 min, 5 sec
*/

<?php
class SecondCalculator
{
  public function calcSeconds(int $seconds)
  {
    $hour = (int)($seconds / 3600);
    $minute = (int) (($seconds - ($hour * 3600)) / 60);
    $second = ($seconds - ($hour * 3600)) - ($minute * 60);

    echo $seconds . " is " . $hour . " hr , " . $minute . " min, " . $second . " secs.";
  }
}

$obj = new SecondCalculator;
$obj->calcSeconds(3665);
