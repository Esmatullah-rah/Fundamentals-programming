<?php

require_once 'Interest.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class InterestTest extends TestCase
{
  public function testAll()
  {
    $interest = new Interest();

    ob_start();
    $interest->calculateInterst(1000, 5, 2);
    $this->assertEquals("Simple interest is 100 and compount interest is 102.5.", ob_get_clean());

    ob_start();
    $interest->calculateInterst(2000, 10, 1);
    $this->assertEquals("Simple interest is 200 and compount interest is 200.", ob_get_clean());

    ob_start();
    $interest->calculateInterst(1500, 7, 3);
    $this->assertEquals("Simple interest is 315 and compount interest is 337.8375.", ob_get_clean());

    ob_start();
    $interest->calculateInterst(500, 12, 4);
    $this->assertEquals("Simple interest is 240 and compount interest is 314.432.", ob_get_clean());

    ob_start();
    $interest->calculateInterst(3000, 8, 5);
    $this->assertEquals("Simple interest is 1200 and compount interest is 1469.328.", ob_get_clean());

    ob_start();
    $interest->calculateInterst(10000, 3, 2);
    $this->assertEquals("Simple interest is 600 and compount interest is 609.", ob_get_clean());

    ob_start();
    $interest->calculateInterst(750, 6, 3);
    $this->assertEquals("Simple interest is 135 and compount interest is 142.836.", ob_get_clean());
  }
}
