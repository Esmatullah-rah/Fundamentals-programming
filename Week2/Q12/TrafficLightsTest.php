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
    $traffic->lightChecking("green");
    $this->assertEquals("GO !", ob_get_clean());

    ob_start();
    $traffic->lightChecking("red");
    $this->assertEquals("STOP !", ob_get_clean());

    ob_start();
    $traffic->lightChecking("yellow");
    $this->assertEquals("READY !", ob_get_clean());

    ob_start();
    $traffic->lightChecking("blue");
    $this->assertEquals("Invalid input!!!", ob_get_clean());

    ob_start();
    $traffic->lightChecking("GREEN");
    $this->assertEquals("GO !", ob_get_clean());
  }
}
