
<?php
// type casting is when you convert a variable from one type to another

//implicit type is when php changes the type on its own
$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit Conversion
$result = $number1 + $number2; // stays int
$result2 = $number2 + $number3; // invert to int
$result3 = $number3 + $number3; // invert to int
$result4 = $number1 . $number2; // string to int
$result5 = $bool1 + $result; // bool to int (1 is true in programming)
$result6 = $bool2 + $result; // bool to int (0 is false is programming)
$result7 = $null +  $number2; // null to int


// $result5 = $fruit + $fruit; //error

// Explicit Conversion:
$result = (string) $number1; // we want to change it ourselves
$result = (int) $number3;

?>