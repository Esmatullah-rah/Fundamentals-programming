<?php

use PHPUnit\Framework\TestCase;

require_once 'SwapTwoNumbers.php';

class SwapTwoNumbersTest extends TestCase
{
  public function testSwap()
  {
    $swap = new SwapTwoNumbers();

    //$this->assertEquals(EXPECTED_VALUE, ACTUAL_VALUE);
    $this->assertEquals([5, 3], $swap->swap(3, 5));
    $this->assertEquals([20, 10], $swap->swap(10, 20));
    $this->assertEquals([2, 1], $swap->swap(1, 2));
    $this->assertEquals([-52, 1002], $swap->swap(1002, -52));
    $this->assertEquals([0, 512], $swap->swap(512, 0));
    $this->assertEquals([-992, -85], $swap->swap(-85, -992));
  }
}
