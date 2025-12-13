<?php

require_once 'Calculator.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
  public function testAll()
  {
    $calculator = new Calculator();

    ob_start();
    $calculator->calculateTwoNumbers(5, 3, "+");
    $this->assertEquals("Sum of those numbers is 8 .", ob_get_clean());

    ob_start();
    $calculator->calculateTwoNumbers(5, 3, "-");
    $this->assertEquals("Subtraction  of those numbers is 2 .", ob_get_clean());

    ob_start();
    $calculator->calculateTwoNumbers(3, 5, "*");
    $this->assertEquals("Multiplication of those numbers is 15 .", ob_get_clean());

    ob_start();
    $calculator->calculateTwoNumbers(10, 5, "/");
    $this->assertEquals("Division of those numbers is 2 .", ob_get_clean());

    ob_start();
    $calculator->calculateTwoNumbers(10, 0, "/");
    $this->assertEquals("Division by zero!", ob_get_clean());

    ob_start();
    $calculator->calculateTwoNumbers(10, 5, "%");
    $this->assertEquals("invalid inputs!!!", ob_get_clean());
  }
}
