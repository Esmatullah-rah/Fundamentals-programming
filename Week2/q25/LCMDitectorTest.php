<?php

require_once 'LCMDitector.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class LCMDitectorTest extends TestCase
{
  public function testAll()
  {
    $lcm = new LCMDitector();

    $this->assertEquals(36, $lcm->findLCM(12, 18));
    $this->assertEquals(50, $lcm->findLCM(10, 25));

    $this->assertEquals(10, $lcm->findLCM(10, 10));
    $this->assertEquals(1, $lcm->findLCM(1, 1));

    $this->assertEquals("those numbers don't have greatest common divisor.🔪", $lcm->findLCM(0, 5));
    $this->assertEquals("those numbers don't have greatest common divisor.🔪", $lcm->findLCM(0, 0));
  }
}
