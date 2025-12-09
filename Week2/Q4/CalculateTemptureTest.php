<?php

require_once 'CalculateTempture.php';
require_once '../../vendor/autoload.php';


use PHPUnit\Framework\TestCase;

class CalculateTemptureTest extends TestCase
{
  public function testAll()
  {
    $temp = new CalculateTempture();

    // Test 1
    ob_start();
    $temp->changeCelsiusToFahrenhiet(0);
    $this->assertEquals("0 degree Celsius is 32 Fahrenhiet.", ob_get_clean());

    // Test 2
    ob_start();
    $temp->changeCelsiusToFahrenhiet(1);
    $this->assertEquals("1 degree Celsius is 33.8 Fahrenhiet.", ob_get_clean());

    // Test 3
    ob_start();
    $temp->changeCelsiusToFahrenhiet(10);
    $this->assertEquals("10 degree Celsius is 50 Fahrenhiet.", ob_get_clean());

    // Test 4
    ob_start();
    $temp->changeCelsiusToFahrenhiet(25);
    $this->assertEquals("25 degree Celsius is 77 Fahrenhiet.", ob_get_clean());

    // Test 5
    ob_start();
    $temp->changeCelsiusToFahrenhiet(-5);
    $this->assertEquals("-5 degree Celsius is 23 Fahrenhiet.", ob_get_clean());

    // Test 6
    ob_start();
    $temp->changeCelsiusToFahrenhiet(37);
    $this->assertEquals("37 degree Celsius is 98.6 Fahrenhiet.", ob_get_clean());

    // Test 7
    ob_start();
    $temp->changeCelsiusToFahrenhiet(100);
    $this->assertEquals("100 degree Celsius is 212 Fahrenhiet.", ob_get_clean());
  }
}
