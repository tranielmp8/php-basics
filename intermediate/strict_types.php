
<?php
// if you want to use types

# turn type declarations on
declare(strict_types=1);

function getSum(int $a, int $b): int
{
  return $a + $b;
}

// echo getSum(1, '25'); # wrong type 25 is string instead of int
echo getSum(1, 25);

// function greeting(string $name):string{
//   return "Hello {$name}";
// }
function greeting(string $name): void
{
  echo "Hello {$name}";
}

echo greeting("");

?>