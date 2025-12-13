<?php

require_once 'CheckNumber.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class CheckNumberTest extends TestCase
{
  public function testAll()
  {
    $check = new CheckNumber();

    $this->assertTrue($check->isNegative(0));
    $this->assertTrue($check->isNegative(10));
    $this->assertTrue($check->isNegative(999));

    $this->assertFalse($check->isNegative(-1));
    $this->assertFalse($check->isNegative(-50));
    $this->assertFalse($check->isNegative(-1000));
  }
}
