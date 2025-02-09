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

function sayHello()
{
  echo "Hello World";
}

function sayGoodbye()
{
  return 'Goodbye <br/>'; # it will not print Goodbye unles you echo out the function
};

sayGoodbye(); # since this has a return it will not print out Goodbye, must echo it out, see

echo sayGoodbye();

sayHello();
