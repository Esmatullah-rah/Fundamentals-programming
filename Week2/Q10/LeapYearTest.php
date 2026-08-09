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
    $leap->leapYearCheck(2222);
    $this->assertEquals("2222 is not a leap year.", ob_get_clean());

    ob_start();
    $leap->leapYearCheck(2000);
    $this->assertEquals("2000 is a leap year.", ob_get_clean());

    ob_start();
    $leap->leapYearCheck(1800);
    $this->assertEquals("1800 is not a leap year.", ob_get_clean());

    ob_start();
    $leap->leapYearCheck(1001);
    $this->assertEquals("1001 is not a leap year.", ob_get_clean());

    ob_start();
    $leap->leapYearCheck(200);
    $this->assertEquals("200 is a leap year.", ob_get_clean());

    ob_start();
    $leap->leapYearCheck(333);
    $this->assertEquals("333 is not a leap year.", ob_get_clean());

    ob_start();
    $leap->leapYearCheck(1);
    $this->assertEquals("1 is a not leap year.", ob_get_clean());
  }
}
