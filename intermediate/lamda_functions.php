<?php

# anonymous functions or Lamda functions - meaning it is not a named function you use it and then it is disregarded
// function ($number) {
//   return $number * $number;
// };

$square = function ($number) {
  return $number * $number;
};
echo $square(3) . '<br/>';
// could put it in a variable

$result = $square(5);
echo $result . '<br/>';

function createCounter()
{
  $count = 0;

  // use (&) is needed on anonymous functions to use something outside of scope
  $counter = function () use (&$count) {
    return ++$count;
  };

  return $counter;
}

$counter = createCounter();
echo $counter() . '<br/>';
