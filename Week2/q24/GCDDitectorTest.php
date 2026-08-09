<?php

require_once 'GCDDitector.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class GCDDitectorTest extends TestCase
{
  public function testAll()
  {
    $gcd = new GCDDitector();

    $this->assertEquals(6, $gcd->findGCD(12, 18));
    $this->assertEquals(1, $gcd->findGCD(7, 1));

    $this->assertEquals("those numbers don't have GCD.🔪", $gcd->findGCD(7, 3));

    $this->assertEquals(10, $gcd->findGCD(10, 10));
    $this->assertEquals(1, $gcd->findGCD(1, 1));

    $this->assertEquals("invalid input....", $gcd->findGCD(-5, 10));
    $this->assertEquals("invalid input....", $gcd->findGCD("5", 10));
    $this->assertEquals("invalid input....", $gcd->findGCD(5, "10"));
  }
}
