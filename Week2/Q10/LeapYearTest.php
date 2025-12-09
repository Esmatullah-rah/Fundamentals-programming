<?php

require_once 'LeapYear.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
  public function testAll()
  {
    $leap = new LeapYear();

    ob_start();
    $leap->leapYearCheck(2000);
    $this->assertEquals("2000 is a leap year.", ob_get_clean());

    ob_start();
    $leap->leapYearCheck(2400);
    $this->assertEquals("2400 is a leap year.", ob_get_clean());

    ob_start();
    $leap->leapYearCheck(2024);
    $this->assertEquals("2024 is not a leap year.", ob_get_clean());

    ob_start();
    $leap->leapYearCheck(1900);
    $this->assertEquals("1900 is not a leap year.", ob_get_clean());

    ob_start();
    $leap->leapYearCheck(999);
    $this->assertEquals("Invalid input year.", ob_get_clean());
  }
}
