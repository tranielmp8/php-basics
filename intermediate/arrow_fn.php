<?php

// regular function
function add($a, $b)
{
  return $a + $b;
}
echo add(1, 2);

# arrow function, in php they are one liners only

$add = fn($a, $b) => $a + $b;
# notice in arrow function when you call them you have to use the $
echo $add(1, 5);


// Another example, but using an array
$numbers = [1, 45, 23, 61, 2];
#lambda function inside array_map
$squaredNumbers = array_map(function ($number) {
  return $number * $number;
}, $numbers);

print_r($squaredNumbers);

# see how to do this as an arrow function
$arrowSquaredNumbers = array_map(fn($number) => $number * $number, $numbers);
echo '<br/>';
print_r($arrowSquaredNumbers);
