/* Esmatullah

3. Calculate the area and perimeter of a rectangle
Description: Given length and width, calculate and display both area and perimeter.
Example:
Input:
length = 4, width = 6
Output:
Area: 24, Perimeter: 20
*/

<?php
class CalculateRectangle
{

  public function calculateAreaAndPerimeter(int $length, int $width)
  {

    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "The area is " . $area . " and the Perimeter is " . $perimeter . ".";
  }
}
