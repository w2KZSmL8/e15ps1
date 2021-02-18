<?php

function isPalindrome($String) {
  $reverse = strrev ($String);

  if ($reverse == $String) {
    return $String." is a palindrome.";
  } else {
    return $String." is not a palindrome.";
  }
}

//Alternatively, split string into character array and check
function vowelCount($String) {
  return substr_count($String, 'a') + substr_count($String, 'e') +
  substr_count($String, 'i') +
  substr_count($String, 'o') +
  substr_count($String, 'u');
}

function letterShift($String) {
  $string_array = str_split($String);
  $empty = "";
  foreach($string_array as $character) 
  {
    if (ord($character) >= 97 and ord($character) <= 122) {
    $new_char = chr(ord($character) + 1);
    } elseif (ord($character) >= 65 and ord($character) <= 90) {
    $new_char = chr(ord($character) + 1);
    } else {
    $new_char = $character;
    }
  
    $empty = $empty.$new_char;
  }  
  return $empty;
}

require 'index.php'
