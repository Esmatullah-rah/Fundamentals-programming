<?php

require_once 'DigitSum.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class DigitSumTest extends TestCase
{
  public function testAll()
  {
    $digitSum = new DigitSum();

    $this->assertEquals(5, $digitSum->calculateDigitsSum(5));
    $this->assertEquals(8, $digitSum->calculateDigitsSum(2024));

    $this->assertEquals(10, $digitSum->calculateDigitsSum(-1234));
    $this->assertEquals(6, $digitSum->calculateDigitsSum(-123));

    $this->assertEquals(0, $digitSum->calculateDigitsSum(0));

    $this->assertEquals("invalid input...", $digitSum->calculateDigitsSum("123"));
    $this->assertEquals("invalid input...", $digitSum->calculateDigitsSum(12.5));
    $this->assertEquals("invalid input...", $digitSum->calculateDigitsSum(true));
  }
}
