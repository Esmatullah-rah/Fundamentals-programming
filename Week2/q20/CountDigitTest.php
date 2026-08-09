<?php

require_once 'CountDigit.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class CountDigitTest extends TestCase
{
  public function testAll()
  {
    $counter = new CountDigit();

    $this->assertEquals(1, $counter->countNumberDigits(5));
    $this->assertEquals(2, $counter->countNumberDigits(12));
    $this->assertEquals(4, $counter->countNumberDigits(2024));
    $this->assertEquals(4, $counter->countNumberDigits(-1234));
    $this->assertEquals(1, $counter->countNumberDigits(0));

    $this->assertEquals("invalid input...", $counter->countNumberDigits("123"));
    $this->assertEquals("invalid input...", $counter->countNumberDigits(12.5));
    $this->assertEquals("invalid input...", $counter->countNumberDigits(true));
  }
}
