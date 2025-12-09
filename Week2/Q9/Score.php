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
    switch ($score) {
      case $score > 100: {
          echo "invalid input";
        }
        break;
      case $score >= 90: {
          echo "A";
        }
        break;
      case $score >= 80: {
          echo "B";
        }
        break;
      case $score >= 70: {
          echo "C";
        }
        break;
      case $score >= 60: {
          echo "D";
        }
        break;
      default: {
          echo "You are a lazy student!!! \nstudy more";
        }
    }
  }
}
