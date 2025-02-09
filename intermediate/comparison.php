<?php

/*
| Comparison Operators
| Operator | Description              |
| -------- | ------------------------ |
| ==       | Equal to                 |
| ===      | Identical to             |
| !=       | Not equal to             |
| <>       | Not equal to             |
| !==      | Not identical to         |
| <        | Less than                |
| >        | Greater than             |
| <=       | Less than or equal to    |
| >=       | Greater than or equal to |
*/

// $x = 10;
// $y = '10';
// var_dump($x == $y); # looks at the value (true)
// var_dump($x === $y); # looks at the data type (false)

// var_dump($x != $y); # looks at the value (false)
// var_dump($x !== $y); # looks at the data type (true)

// var_dump($x <> $y); # looks at the data type (false) <> not equal

// var_dump($x > $y);
// var_dump($x < $y);
// var_dump($x >= $y);
// var_dump($x <= $y);



/*
| Logical Operators
| Operator | Description            |
| -------- | ---------------------- |
| and      | True if both are true  |
| &&       | True if both are true  |
| or       | True if either is true |
| ||       | True if either is true |
| xor      | True if one is true    |
| !        | True if it is not true |
*/

$a = 10;
$b = 20;

var_dump($a == 10 && $b == 20);
echo "<br />";
var_dump($a == 10 and $b == 20);

echo "<br />";
var_dump($a == 10 or $b == 20);
var_dump($a == 10 || $b == 25);
echo "<br />";
var_dump($a == 10 xor $b == 20);
