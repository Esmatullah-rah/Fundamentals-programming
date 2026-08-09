<?php

require_once 'TriangleChecker.php';
require_once  __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class TriangleCheckerTest extends TestCase
{
  public function testAll()
  {
    $checker = new TriangleChecker();

    $this->assertTrue($checker->isTriangle(3, 4, 5));
    $this->assertTrue($checker->isTriangle(5, 5, 5));
    $this->assertTrue($checker->isTriangle(5, 5, 8));

    $this->assertFalse($checker->isTriangle(1, 2, 3));
    $this->assertFalse($checker->isTriangle(1, 1, 2));
    $this->assertFalse($checker->isTriangle(2, 3, 6));
  }
}
