/*Esmatullah
11. Simple Calculator using switch-case
Description: Input two numbers and an operator (+, -, *, /) and compute the result.
Example:
Input:
5, 3, +
Output:
8
*/

<?php
class Calculator
{
  public function calculateTwoNumbers(int $number1, int $number2, string $type)
  {
    switch ($type) {
      case "+": {
          echo "+ of those numbers is " . $number1 + $number2 . " .";
        }
        break;
      case "-": {
          echo "- of those numbers is " . $number1 - $number2 . " .";
        }
        break;
      case "*": {
          echo "* of those numbers is " . $number1 * $number2 . " .";
        }
        break;
      case "/": {
          echo "/ of those numbers is " . $number1 / $number2 . " .";
        }
        break;
      default: {
          echo "invalid inputs!!!";
        }
    }
  }
}
