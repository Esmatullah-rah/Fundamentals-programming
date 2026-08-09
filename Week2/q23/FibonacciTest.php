<?php

require_once 'Fibonacci.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
  public function testAll()
  {
    $fib = new Fibonacci();

    $this->assertEquals([], $fib->findFibonicci(0));
    $this->assertEquals([0], $fib->findFibonicci(1));
    $this->assertEquals([0, 1], $fib->findFibonicci(2));
    $this->assertEquals([0, 1, 1, 2, 3], $fib->findFibonicci(5));
    $this->assertEquals([0, 1, 1, 2, 3, 5, 8, 13, 21, 34], $fib->findFibonicci(10));
  }
}
