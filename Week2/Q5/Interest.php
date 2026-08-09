/*Esmatullah

5. Compute Simple and Compound Interest
Description: Given Principal (P), Rate (R), and Time (T), compute:
Simple Interest = (P × R × T) / 100
Compound Interest = P × ((1 + R/100) ^ T - 1)
Example:
Input:
P = 1000, R = 5, T = 2
Output:
SI = 100, CI ≈ 102.5
*/
<?php
class Interest
{
  public function calculateInterst(int $principle, int $rate, int $time)
  {
    $simpleInterest = ($principle * $rate * $time) / 100;
    $compounInterest = $principle * ((1 + $rate / 100) ** $time - 1);
    echo "Simple interest is " . $simpleInterest . " and compount interest is " . $compounInterest . ".";
  }
}
