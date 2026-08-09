<?php

require_once 'NaturalNumber.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class NaturalNumberTest extends TestCase
{
  public function testAll()
  {
    $natural = new NaturalNumber();

    $this->assertEquals(15, $natural->naturalSum(5));
    $this->assertEquals(55, $natural->naturalSum(10));
    $this->assertEquals(1, $natural->naturalSum(1));

    $this->assertEquals("invalid input.", $natural->naturalSum(0));
    $this->assertEquals("invalid input.", $natural->naturalSum(-5));
  }
}
