<?php

require_once 'FindMonthDays.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class FindMonthDaysTest extends TestCase
{
  public function testAll()
  {
    $month = new FindMonthDays();

    ob_start();
    $month->printMonth(1);
    $this->assertEquals("January, 30 days", ob_get_clean());

    ob_start();
    $month->printMonth(2);
    $this->assertEquals("Febuary, 28 or 29 days", ob_get_clean());

    ob_start();
    $month->printMonth(3);
    $this->assertEquals("March, 30 days", ob_get_clean());

    ob_start();
    $month->printMonth(4);
    $this->assertEquals("April, 30 days", ob_get_clean());

    ob_start();
    $month->printMonth(5);
    $this->assertEquals("May, 30 days", ob_get_clean());

    ob_start();
    $month->printMonth(6);
    $this->assertEquals("June, 31 days", ob_get_clean());

    ob_start();
    $month->printMonth(7);
    $this->assertEquals("July, 31 days", ob_get_clean());

    ob_start();
    $month->printMonth(8);
    $this->assertEquals("August, 31 days", ob_get_clean());

    ob_start();
    $month->printMonth(9);
    $this->assertEquals("September, 31 days", ob_get_clean());

    ob_start();
    $month->printMonth(10);
    $this->assertEquals("October, 31 days", ob_get_clean());

    ob_start();
    $month->printMonth(11);
    $this->assertEquals("November, 31 days", ob_get_clean());

    ob_start();
    $month->printMonth(12);
    $this->assertEquals("December, 31 days", ob_get_clean());

    ob_start();
    $month->printMonth(13);
    $this->assertEquals("Invalid input", ob_get_clean());
  }
}
