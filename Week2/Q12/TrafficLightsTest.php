<?php

require_once 'TrafficLights.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class TrafficLightsTest extends TestCase
{
  public function testAll()
  {
    $traffic = new TrafficLights();

    ob_start();
    $traffic->lightChecking("Green");
    $this->assertEquals("GO !", ob_get_clean());

    ob_start();
    $traffic->lightChecking("Red");
    $this->assertEquals("STOP !", ob_get_clean());

    ob_start();
    $traffic->lightChecking("Yellow");
    $this->assertEquals("READY !", ob_get_clean());

    ob_start();
    $traffic->lightChecking("green");
    $this->assertEquals("Invalid input!!!", ob_get_clean());

    ob_start();
    $traffic->lightChecking("");
    $this->assertEquals("Invalid input!!!", ob_get_clean());

    ob_start();
    $traffic->lightChecking("Blue");
    $this->assertEquals("Invalid input!!!", ob_get_clean());
  }
}
