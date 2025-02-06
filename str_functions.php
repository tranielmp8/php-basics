<?php
$output = null;
$string = 'Hello World';

// strlen
$output = strlen($string);

// str_word_count
// $output = str_word_count($string);

// strpos
// $output = strpos($string, 'World');

// GET SPECIFIC CHAR BY INDEX
$output = $string[4];

// sub string = substr
$output = substr($string, 6, 5);

// str_replace
$output = str_replace('World', 'Universe', $string);

// string to lower strtolower;
$output = strtolower($string);

// string to upper strtoupper
$output = strtoupper($string);

// ucwords
$output = ucwords($string);

// trim
$output = trim("    $string    again");
