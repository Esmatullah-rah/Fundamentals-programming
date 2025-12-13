<?php
/*Esmatullah
12. Traffic Light System using switch-case
Description: Input a color (Red, Yellow, Green) and display an action (Stop, Ready, Go).
Example:
Input:
Green
Output:
Go
*/
class TrafficLights
{
  public function lightChecking(string $lightColor)
  {
    $lightColor = strtolower($lightColor);
    switch ($lightColor) {
      case "green": {
          echo "GO !";
        }
        break;
      case "red": {
          echo "STOP !";
        }
        break;
      case "yellow": {
          echo "READY !";
        }
        break;
      default: {
          echo "Invalid input!!!";
        }
    }
  }
}
