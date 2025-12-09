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
<?php
class LeapYear
{
  public function leapYearCheck(int $number)
  {
    if ($number > 1000) {
      if ($number % 4 == 0 && $number % 400 == 0) {
        echo $number . " is a leap year.";
      } else {
        echo $number . " is not a leap year.";
      }
    } else {
      echo "Invalid input year.";
    }
  }
}
