<?php
/*Esmatullah
10. Leap Year Checker
Description: Determine if a given year is a leap year.
Rule: Year divisible by 4 → leap year, except centuries not divisible by 400.
Example:
Input:
2000
Output:
Leap year
Input:
1900
Output:
Not leap year
*/
class LeapYear
{
  public function leapYearCheck(int $number)
  {
    $leapYearPrint = $number . " is a leap year.";
    $notLeapYearPrint = $number . " is not a leap year.";
    if ($number >= 400) {
      if ($number % 4 == 0 && $number % 400 == 0) {
        echo $leapYearPrint;
      } else {
        echo $notLeapYearPrint;
      }
    } else if ($number < 400) {
      if ($number % 4 == 0) {
        echo $leapYearPrint;
      } else {
        echo $notLeapYearPrint;
      }
    } else {
      echo "Invalid input year.";
    }
  }
}

$obj = new LeapYear;
$obj->leapYearCheck(2222);
