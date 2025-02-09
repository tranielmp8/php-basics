<?php
# call back function
# callback is a function that is called within another function later on within that function. map is an example of a callback function

$numbers = [12, 7, 25, 6, 45];

// $squaredNumbers = array_map(function ($number) {
//   return $number * $number;
// }, $numbers);

# another way to perform the action above
$square = function ($number) {
  return $number * $number;
};

$squaredNumbers = array_map($square, $numbers);

// print_r($squaredNumbers);

function applyCallback($callback, $value)
{
  return $callback($value);
};

$double = function ($number) {
  return $number * 2;
};

$result = applyCallback($double, 5);

echo $result;
