<?php

require_once 'MultiplicationTable.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class MultiplicationTableTest extends TestCase
{
  public function testAll()
  {
    $table = new MultiplicationTable();

    ob_start();
    $table->print_Multiplication_Table_Of_One_Number(2);
    $this->assertEquals(
      "2 X 1 =  2\n" .
        "2 X 2 =  4\n" .
        "2 X 3 =  6\n" .
        "2 X 4 =  8\n" .
        "2 X 5 =  10\n" .
        "2 X 6 =  12\n" .
        "2 X 7 =  14\n" .
        "2 X 8 =  16\n" .
        "2 X 9 =  18\n" .
        "2 X 10 =  20\n",
      ob_get_clean()
    );

    ob_start();
    $table->print_Multiplication_Table_Of_One_Number(0);
    $this->assertEquals("invalid input.", ob_get_clean());

    ob_start();
    $table->print_Multiplication_Table_Of_One_Number(-3);
    $this->assertEquals("invalid input.", ob_get_clean());

    ob_start();
    $table->print_Multiplication_Table_Of_One_Number(2.5);
    $this->assertEquals("invalid input.", ob_get_clean());
  }
}
