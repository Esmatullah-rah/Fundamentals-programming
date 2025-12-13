<?php

require_once 'OddOrEven.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class OddOrEvenTest extends TestCase
{
  public function testAll()
  {
    $checker = new OddOrEven();

    $this->assertTrue($checker->isOdd(-1));
    $this->assertTrue($checker->isOdd(3 / 5));
    $this->assertTrue($checker->isOdd(999));

    $this->assertFalse($checker->isOdd(0));
    $this->assertFalse($checker->isOdd(2));
    $this->assertFalse($checker->isOdd(1000));
  }
}
