<?php
$output = null;

// multi-dimensional arrays (arrays within arrays);

$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Orange'],
  ['Banana', 'Yellow'],
];

$output = $fruits[0][1]; //first array second value
$output = $fruits[2][0]; //last array first value

// add to fruits
$fruits[] = ['Grape', 'Purple'];

$users = [
  ['name' => 'John', 'email' => 'john@gmail.com', 'password' => '123456'],
  ['name' => 'Kool', 'email' => 'kool@gmail.com', 'password' => '651234'],
  ['name' => 'Mary', 'email' => 'mary@gmail.com', 'password' => '561243'],
];

$output = $users[1]['email'];

// add to $user array
$users[] = ['name' => 'Kakashi', 'email' => 'kakashi@gmail.com', 'password' => '589243'];

// another way to add at the end of users array

array_push($users, ['name' => 'Naruto', 'email' => 'naruto@gmail.com', 'password' => '589243']);

// remove a user at the end
array_pop($users);

// remove a specific user
unset($users[1]);

// Count users
$output = count($users);
