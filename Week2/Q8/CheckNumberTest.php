<?php

require_once 'CheckNumber.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class CheckNumberTest extends TestCase
{
  public function testAll()
  {
    $checker = new CheckNumber();

    ob_start();
    $checker->isNegative(10);
    $this->assertEquals("10 is positive. ", ob_get_clean());

    ob_start();
    $checker->isNegative(-5);
    $this->assertEquals("-5 is negative. ", ob_get_clean());

    ob_start();
    $checker->isNegative(0);
    $this->assertEquals("0 is negative. ", ob_get_clean());

    ob_start();
    $checker->isNegative(999999);
    $this->assertEquals("999999 is positive. ", ob_get_clean());

    ob_start();
    $checker->isNegative(-999999);
    $this->assertEquals("-999999 is negative. ", ob_get_clean());

    ob_start();
    $checker->isNegative(1);
    $this->assertEquals("1 is positive. ", ob_get_clean());

    ob_start();
    $checker->isNegative(-1);
    $this->assertEquals("-1 is negative. ", ob_get_clean());
  }
}
