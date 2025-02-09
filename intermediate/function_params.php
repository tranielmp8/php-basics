<?php
function add($a, $b)
{
  return $a + $b;
};


echo add(2, 5);
echo "<br />";
echo add(0, 5);
echo "<br />";
echo add(3, 10);
echo "<br />";


function sayHello($name = 'World!')
{
  return 'Hello ' . $name . '! <br/>';
}

echo  sayHello('Kakashi');
echo  sayHello();

// if you do not know how many params you need then use the splat operator (JAVASCRIPT IS CALLED REST OPERATOR ...)

function addAll(...$numbers)
{
  $total = 0;

  foreach ($numbers as $number) {
    $total += $number;
  }

  return $total;
}

echo addAll(1, 2, 5, 7, 10);
