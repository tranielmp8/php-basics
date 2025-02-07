<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$output = null;

$num1 = 20;
$num2 = 10;

// Basic Math
$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;

// Assignment Operator

$num3 = 10;
$num3 = ++$num3; // add one
$num3 += 20;
$num3 -= 20;
$num3 *= 20;
// $num3 /= 20;

// $output = $num3;

$num4 = 15;

// Built-in PHP functions:

// rand()
$output = rand(); # random number
$output = getrandmax(); // max random number
$output = rand(1, 10); // between 1 - 10

//rounding 
$output = round(4.7); // round to 5
$output = round(4.2); # round to 4;
$output = ceil(4.2); // always rounds up so 5
$output = floor(4.9); // always rounds down so 4;
$output = sqrt(64); // square root
$output = pi(); // 3.14xxxxx
$output = abs(-3.25); // gives absolute positive number so 3.25
$output = max(1, 25, 80, 75);
$output = min([35, 25, 80, 75]);

// Number Format - great with currency allows for the use of decimals and delimiters
$output = number_format(1234567.191234, 2, '.', ',');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl">
        <?= $output ?>
      </p>
    </div>
  </div>
</body>

</html>