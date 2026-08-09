<?php

require_once 'Score.php';
require_once '../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ScoreTest extends TestCase
{
  public function testAll()
  {
    $score = new Score();

    ob_start();
    $score->checkScore(150);
    $this->assertEquals("invalid input", ob_get_clean());

    ob_start();
    $score->checkScore(100);
    $this->assertEquals("A", ob_get_clean());

    ob_start();
    $score->checkScore(95);
    $this->assertEquals("A", ob_get_clean());

    ob_start();
    $score->checkScore(85);
    $this->assertEquals("B", ob_get_clean());

    ob_start();
    $score->checkScore(75);
    $this->assertEquals("C", ob_get_clean());

    ob_start();
    $score->checkScore(65);
    $this->assertEquals("D", ob_get_clean());

    ob_start();
    $score->checkScore(40);
    $this->assertEquals("You are a lazy student!!! \nstudy more", ob_get_clean());

    ob_start();
    $score->checkScore(0);
    $this->assertEquals("You are a lazy student!!! \nstudy more", ob_get_clean());
  }
}
