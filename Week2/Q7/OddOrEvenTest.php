<?php

require_once 'OddOrEven.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class OddOrEvenTest extends TestCase
{
  public function testAll()
  {
    $oddOrEven = new OddOrEven();

    ob_start();
    $oddOrEven->isOdd(3);
    $this->assertEquals("3 is ODD. ", ob_get_clean());

    ob_start();
    $oddOrEven->isOdd(10);
    $this->assertEquals("10 is EVEN. ", ob_get_clean());

    ob_start();
    $oddOrEven->isOdd(0);
    $this->assertEquals("0 is EVEN. ", ob_get_clean());

    ob_start();
    $oddOrEven->isOdd(-7);
    $this->assertEquals("-7 is ODD. ", ob_get_clean());

    ob_start();
    $oddOrEven->isOdd(-12);
    $this->assertEquals("-12 is EVEN. ", ob_get_clean());

    ob_start();
    $oddOrEven->isOdd(123456789);
    $this->assertEquals("123456789 is ODD. ", ob_get_clean());

    ob_start();
    $oddOrEven->isOdd(98765432);
    $this->assertEquals("98765432 is EVEN. ", ob_get_clean());
  }
}
