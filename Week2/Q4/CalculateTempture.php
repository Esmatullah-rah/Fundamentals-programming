/* Esmatullah

4. Temperature converter (Celsius ↔ Fahrenheit)
Description: Convert temperature from Celsius to Fahrenheit and vice versa.
Formula:
F = (C × 9/5) + 32
C = (F - 32) × 5/9
Example:
Input:
C = 25
Output:
F = 77
*/
<?php

class CalculateTempture
{
  public function celsiusToFahrenhiet(int $celsius)
  {
    $fahrenhiet = ($celsius * 9 / 5) + 32;
    echo $celsius . " degree Celsius is " . $fahrenhiet . " Fahrenhiet.";
  }
  public function fahrenhietToCelsiuse(int $fahrenhiet)
  {
    $celsius = ($fahrenhiet - 32) * 5 / 9;
    echo $fahrenhiet . " degree Fahrehiet is " . $celsius . " Celsiuse.";
  }
}
