<?php

require_once '../../vendor/autoload.php';
require_once 'CalculateRectangle.php';

use PHPUnit\Framework\TestCase;

class CalculateRectangleTest extends TestCase
{
  public function testAll()
  {
    $rect = new CalculateRectangle();

    ob_start();
    $rect->calculateAreaAndPerimeter(5, 3);
    $this->assertEquals("The area is 15 and the Perimeter is 16 .", ob_get_clean());

    ob_start();
    $rect->calculateAreaAndPerimeter(4, 4);
    $this->assertEquals("The area is 16 and the Perimeter is 16 .", ob_get_clean());

    ob_start();
    $rect->calculateAreaAndPerimeter(10, 1);
    $this->assertEquals("The area is 10 and the Perimeter is 22 .", ob_get_clean());

    ob_start();
    $rect->calculateAreaAndPerimeter(2, 9);
    $this->assertEquals("The area is 18 and the Perimeter is 22 .", ob_get_clean());

    ob_start();
    $rect->calculateAreaAndPerimeter(7, 2);
    $this->assertEquals("The area is 14 and the Perimeter is 18 .", ob_get_clean());

    ob_start();
    $rect->calculateAreaAndPerimeter(6, 6);
    $this->assertEquals("The area is 36 and the Perimeter is 24.", ob_get_clean());

    ob_start();
    $rect->calculateAreaAndPerimeter(3, 12);
    $this->assertEquals("The area is 36 and the Perimeter is 30 .", ob_get_clean());
  }
}
