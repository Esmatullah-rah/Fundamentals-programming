<?php

require_once 'Revers.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ReversTest extends TestCase
{
  public function testAll()
  {
    $reverser = new Revers();

    $this->assertEquals("54321", $reverser->revers_Number_And_String(12345));
    $this->assertEquals("4321", $reverser->revers_Number_And_String(-1234));
    $this->assertEquals("0", $reverser->revers_Number_And_String(0));
    $this->assertEquals("cba", $reverser->revers_Number_And_String("abc"));
    $this->assertEquals("!dlroW ,olleH", $reverser->revers_Number_And_String("Hello, World!"));

    $this->assertEquals("invalid input..", $reverser->revers_Number_And_String(12.34));
  }
}
