<?php

require_once 'EvenNumbers.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class EvenNumbersTest extends TestCase
{
  public function testAll()
  {
    $evenNumbers = new EvenNumbers();

    $this->assertEquals([2, 4, 6, 8, 10], $evenNumbers->findEvenNumbers(1, 10));
    $this->assertEquals([4, 6, 8], $evenNumbers->findEvenNumbers(3, 8));

    $this->assertEquals([0, 2, 4], $evenNumbers->findEvenNumbers(0, 4));
    $this->assertEquals([2, 4, 6], $evenNumbers->findEvenNumbers(2, 6));

    $this->assertEquals([], $evenNumbers->findEvenNumbers(5, 5));

    $this->assertEquals([0], $evenNumbers->findEvenNumbers(0, 0));

    $this->assertEquals([0, 2, 4, 6, 8, 10], $evenNumbers->findEvenNumbers(-1, 10));
    $this->assertEquals([-4, -2, 0, 2], $evenNumbers->findEvenNumbers(-4, 2));
  }
}
