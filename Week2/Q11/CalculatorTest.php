<?php

require_once 'Calculator.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
  public function testAll()
  {
    $calc = new Calculator();

    ob_start();
    $calc->calculateTwoNumbers(3, 5, "+");
    $this->assertEquals("+ of those numbers is 8 .", ob_get_clean());

    ob_start();
    $calc->calculateTwoNumbers(10, 4, "-");
    $this->assertEquals("- of those numbers is 6 .", ob_get_clean());

    ob_start();
    $calc->calculateTwoNumbers(6, 7, "*");
    $this->assertEquals("* of those numbers is 42 .", ob_get_clean());

    ob_start();
    $calc->calculateTwoNumbers(20, 4, "/");
    $this->assertEquals("/ of those numbers is 5 .", ob_get_clean());

    ob_start();
    $calc->calculateTwoNumbers(5, 5, "%");
    $this->assertEquals("invalid inputs!!!", ob_get_clean());
  }
}
