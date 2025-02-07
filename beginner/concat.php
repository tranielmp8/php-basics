<?php
$title = 'Learn PHP From Scratch';

$firstName = 'Kakshi';
$lastName = 'Hatake';

// for concatenation in php you would use a . instead of +
// $fullName = $firstName + $lastName; // wrong
// $fullName = $firstName . $lastName; // right
$fullName = $firstName . ' ' . $lastName; // right
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?php $title ?></title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold"><?= $title ?></h1>
      <!-- <h1 class="text-3xl font-semibold"><php? echo = 'Learn PHP From Scratch'; ?></h1> -->
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
      <!-- <h2 class="text-2xl font-semibold mb-4"><?= $heading ?></h2> -->
      Hello my name is <?= $fullName ?>
      <br>
      <?= "Hello, My name is $fullName" ?>
      <br>
      <?= "Hello, My name is {$fullName}" ?>
      <br>
      <!-- this wont error, but it doesn't interpolate the variable -->
      <?= 'Hello, My name is $fullName' ?>
    </div>
  </div>
</body>

</html>