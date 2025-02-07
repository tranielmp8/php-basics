<?php
$output = null;

// associative arrays are like object literals in javascript, or dictionaries in python - Key:Value pairs

$user = [
  "name" => "Kakashi",
  "email" => "kakashi@gmail.com",
  "password" => "123456",
  "hobbies" => ["Football", "coding", "stock trading"],
];

$output = $user['email'];

// go into hobbies array
$output = $user['hobbies'][0];

// add to the associative array
$user['address'] = '123 Main St';
$output = $user['address'];

var_dump($user);
