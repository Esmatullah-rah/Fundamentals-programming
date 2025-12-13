<?php

require_once 'CheckNumber.php';
require_once __DIR__ . '/../../vendor/autoload.php';


use PHPUnit\Framework\TestCase;

class CheckNumberTest extends TestCase
{
  public function testAll()
  {
    $checker = new CheckNumber();

    $this->assertEquals("positive", $checker->checkNumberSign(5));
    $this->assertEquals("positive", $checker->checkNumberSign(100));

    $this->assertEquals("Negative", $checker->checkNumberSign(-1));
    $this->assertEquals("Negative", $checker->checkNumberSign(-50));

    $this->assertEquals("The NUMBER is Zero !!!!", $checker->checkNumberSign(0));
  }
}
