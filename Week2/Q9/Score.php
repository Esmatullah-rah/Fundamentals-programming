/* Esmatullah

9. Grade Calculator (0–100 → A–F)
Description: Input a student’s marks (0–100) and print the grade based on a scale.
Example:
Input:
85
Output:
B */

<?php
class Score
{
  public function checkScore(int $score)
  {
    if ($score > 100) {
      return "invalid input";
    }
    switch ($score) {

      case $score >= 90: {
          return "A";
        }
        break;
      case $score >= 80: {
          return "B";
        }
        break;
      case $score >= 70: {
          return "C";
        }
        break;
      case $score >= 60: {
          return "D";
        }
        break;
      default: {
          return "You are a lazy student!!! \nstudy more";
        }
    }
  }
}
