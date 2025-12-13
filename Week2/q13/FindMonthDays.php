<?php
/*Esmatullah
13. Month name & number of days using switch-case
Description: Input a month number (1–12) and display its name and number of days.
Example:
Input:
2
Output:
February, 28 or 29 days
*/
class FindMonthDays
{
  public function printMonth(int $monthNumber)
  {
    switch ($monthNumber) {
      case "1": {
          echo "January, 30 days";
        }
        break;
      case "2": {
          echo "Febuary, 28 or 29 days";
        }
        break;
      case "3": {
          echo "March, 30 days";
        }
        break;
      case "4": {
          echo "April, 30 days";
        }
        break;
      case "5": {
          echo "May, 30 days";
        }
        break;
      case "6": {
          echo "June, 31 days";
        }
        break;
      case "7": {
          echo "July, 31 days";
        }
        break;
      case "8": {
          echo "August, 31 days";
        }
        break;
      case "9": {
          echo "September, 31 days";
        }
        break;
      case "10": {
          echo "October, 31 days";
        }
        break;
      case "11": {
          echo "November, 31 days";
        }
        break;
      case "12": {
          echo "December, 31 days";
        }
        break;
      default: {
          echo "Invalid input";
        }
    }
  }
}

$obj = new FindMonthDays;
$obj->printMonth(12);
