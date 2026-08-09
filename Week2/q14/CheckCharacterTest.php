<?php

require_once 'CheckCharacter.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class CheckCharacterTest extends TestCase
{
  public function testAll()
  {
    $checker = new CheckCharacter();

    $this->assertEquals("Vowel", $checker->checkCharacterType("a"));
    $this->assertEquals("Vowel", $checker->checkCharacterType("E"));

    $this->assertEquals("Consonant", $checker->checkCharacterType("b"));
    $this->assertEquals("Consonant", $checker->checkCharacterType("Z"));

    $this->assertEquals("Digit", $checker->checkCharacterType("5"));

    $this->assertEquals("Special Symbol", $checker->checkCharacterType("@"));
    $this->assertEquals("Special Symbol", $checker->checkCharacterType("#"));

    $this->assertEquals("Invalid input", $checker->checkCharacterType("ab"));
    $this->assertEquals("Invalid input", $checker->checkCharacterType(""));
    $this->assertEquals("Invalid input", $checker->checkCharacterType("  "));
  }
}
