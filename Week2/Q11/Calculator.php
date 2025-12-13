<?php
/*Esmatullah
11. Simple Calculator using switch-case
Description: Input two numbers and an operator (+, -, *, /) and compute the result.
Example:
Input:
5, 3, +
Output:
8
*/
class Calculator
{
  public function calculateTwoNumbers(int $number1, int $number2, string $operand)
  {
    switch ($operand) {
      case "+": {
          echo "Sum of those numbers is " . $number1 + $number2 . " .";
        }
        break;
      case "-": {
          echo "Subtraction  of those numbers is " . $number1 - $number2 . " .";
        }
        break;
      case "*": {
          echo "Multiplication of those numbers is " . $number1 * $number2 . " .";
        }
        break;
      case "/": {
          if ($number2 === 0) {
            echo "Division by zero!";
          } else {

            echo "Division of those numbers is " . $number1 / $number2 . " .";
          }
        }
        break;
      default: {
          echo "invalid inputs!!!";
        }
    }
  }
}
