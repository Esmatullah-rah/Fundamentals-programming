<?php

require_once '../../vendor/autoload.php';
require_once 'FindLargestAndSmallest.php';

use PHPUnit\Framework\TestCase;


class FindLargestAndSmallestTest extends TestCase
{
  public function testFindMaxAndMin()
  {
    $obj = new FindLargestAndSmallest;

    ob_start();
    $obj->findMaxAndMin([2, 5, 8, 15, 7, -100, 8]);
    $this->assertEquals('Max is 15 and Min is -100', ob_get_clean());

    ob_start();
    $obj->findMaxAndMin([1, 2, 3, 4, 5]);
    $this->assertEquals('Max is 5 and Min is 1',    ob_get_clean());

    ob_start();
    $obj->findMaxAndMin([-5, -10, -3, -20]);
    $this->assertEquals('Max is -3 and Min is -20', ob_get_clean());

    ob_start();
    $obj->findMaxAndMin([7, 7, 7, 7]);
    $this->assertEquals('Max is 7 and Min is 7',    ob_get_clean());

    ob_start();
    $obj->findMaxAndMin([42]);
    $this->assertEquals('Max is 42 and Min is 42',  ob_get_clean());
  }
}
