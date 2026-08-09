<?php

require_once 'CalculateTempture.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class CalculateTemptureTest extends TestCase
{
  public function testAll()
  {
    $temp = new CalculateTempture();

    ob_start();
    $temp->celsiusToFahrenhiet(0);
    $this->assertEquals("0 degree Celsius is 32 Fahrenhiet.", ob_get_clean());

    ob_start();
    $temp->celsiusToFahrenhiet(25);
    $this->assertEquals("25 degree Celsius is 77 Fahrenhiet.", ob_get_clean());

    ob_start();
    $temp->celsiusToFahrenhiet(-10);
    $this->assertEquals("-10 degree Celsius is 14 Fahrenhiet.", ob_get_clean());

    ob_start();
    $temp->fahrenhietToCelsiuse(32);
    $this->assertEquals("32 degree Fahrehiet is 0 Celsiuse.", ob_get_clean());

    ob_start();
    $temp->fahrenhietToCelsiuse(77);
    $this->assertEquals("77 degree Fahrehiet is 25 Celsiuse.", ob_get_clean());

    ob_start();
    $temp->fahrenhietToCelsiuse(14);
    $this->assertEquals("14 degree Fahrehiet is -10 Celsiuse.", ob_get_clean());
  }
}
