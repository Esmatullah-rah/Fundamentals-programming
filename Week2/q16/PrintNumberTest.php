<?php

require_once 'PrintNumber.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class PrintNumberTest extends TestCase
{
  public function testAll()
  {
    $printer = new PrintNumber();

    ob_start();
    $printer->printNumbers(5);
    $this->assertEquals("0, 1, 2, 3, 4, 5", ob_get_clean());

    ob_start();
    $printer->printNumbers(0);
    $this->assertEquals("0", ob_get_clean());

    ob_start();
    $printer->printNumbers(-8);
    $this->assertEquals("0, -1, -2, -3, -4, -5, -6, -7, -8", ob_get_clean());

    ob_start();
    $printer->printNumbers(-3);
    $this->assertEquals("0, -1, -2, -3", ob_get_clean());

    ob_start();
    $printer->printNumbers(3.5);
    $this->assertEquals("Invalid input.", ob_get_clean());

    ob_start();
    $printer->printNumbers(-2.7);
    $this->assertEquals("Invalid input.", ob_get_clean());

    ob_start();
    $printer->printNumbers(7 / 5);
    $this->assertEquals("Invalid input.", ob_get_clean());
  }
}
