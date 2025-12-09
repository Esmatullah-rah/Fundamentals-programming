<?php

require_once 'SwapTwoNumbers.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class SwapTwoNumbersTest extends TestCase
{
  public function testAll()
  {
    $swap = new SwapTwoNumbers();

    ob_start();
    $swap->swap(3, 5);
    $this->assertEquals("[5,3]", ob_get_clean());

    ob_start();
    $swap->swap(10, 20);
    $this->assertEquals("[20,10]", ob_get_clean());

    ob_start();
    $swap->swap(1, 2);
    $this->assertEquals("[2,1]", ob_get_clean());

    ob_start();
    $swap->swap(1002, -52);
    $this->assertEquals("[-52,1002]", ob_get_clean());

    ob_start();
    $swap->swap(512, 0);
    $this->assertEquals("[0,512]", ob_get_clean());

    ob_start();
    $swap->swap(-85, -992);
    $this->assertEquals("[-992,-85]", ob_get_clean());
  }
}
