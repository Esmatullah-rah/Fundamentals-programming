/*Esmatullah
12. Traffic Light System using switch-case
Description: Input a color (Red, Yellow, Green) and display an action (Stop, Ready, Go).
Example:
Input:
Green
Output:
Go
*/
<?php
class TrafficLights
{
  public function lightChecking(string $lightColor)
  {
    switch ($lightColor) {
      case "Green": {
          echo "GO !";
        }
        break;
      case "Red": {
          echo "STOP !";
        }
        break;
      case "Yellow": {
          echo "READY !";
        }
        break;
      default: {
          echo "Invalid input!!!";
        }
    }
  }
}
