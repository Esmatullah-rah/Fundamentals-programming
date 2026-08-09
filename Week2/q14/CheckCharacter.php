<?php
/*
14. Check character type 
Description: Input a character and determine if it’s a vowel, consonant, digit, or special symbol. 
Example: 
Input: 
a 
Output: 
Vowel 
*/


class CheckCharacter
{
  public function checkCharacterType($character)
  {
    $char = trim($character);
    if (strlen($char) !== 1) {
      return "Invalid input";
    }
    //preg_match method find similar character from a given variable. first part is the condition and second part is given variable.
    if (preg_match('/^[aeiouAEIOU]$/', $char)) {
      return "Vowel";
    }
    // there is no problem for including the vowels for the code below.
    if (preg_match('/^[a-zA-Z]$/', $char)) {
      return "Consonant";
    }

    if (preg_match('/^[0-9]$/', $char)) {
      return "Digit";
    }

    return "Special Symbol";
  }
}
