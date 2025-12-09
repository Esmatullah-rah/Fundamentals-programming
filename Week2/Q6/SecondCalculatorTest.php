<?php

require_once 'SecondCalculator.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class SecondCalculatorTest extends TestCase
{
  public function testAll()
  {
    $calculator = new SecondCalculator();

    ob_start();
    $calculator->calcSeconds(3665);
    $this->assertEquals("3665 seconds is 1 hr, 1 min, 5 sec.", ob_get_clean());

    ob_start();
    $calculator->calcSeconds(3600);
    $this->assertEquals("3600 seconds is 1 hr, 0 min, 0 sec.", ob_get_clean());

    ob_start();
    $calculator->calcSeconds(59);
    $this->assertEquals("59 seconds is 0 hr, 0 min, 59 sec.", ob_get_clean());

    ob_start();
    $calculator->calcSeconds(3723);
    $this->assertEquals("3723 seconds is 1 hr, 2 min, 3 sec.", ob_get_clean());

    ob_start();
    $calculator->calcSeconds(0);
    $this->assertEquals("0 seconds is 0 hr, 0 min, 0 sec.", ob_get_clean());

    ob_start();
    $calculator->calcSeconds(86399);
    $this->assertEquals("86399 seconds is 23 hr, 59 min, 59 sec.", ob_get_clean());

    ob_start();
    $calculator->calcSeconds(7205);
    $this->assertEquals("7205 seconds is 2 hr, 0 min, 5 sec.", ob_get_clean());
  }
}
