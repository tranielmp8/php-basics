<?php
// String
$name = 'Traniel Pride';
$name2 = "Kakashi Hatame";

var_dump($name);
echo getType($name2);
echo '<br />';

// Integer
$age = "40";
var_dump($age);

echo '<br />';

$new_age = 40;
var_dump($new_age);

echo '<br />';

$rating = 4.5;
var_dump($rating);

echo '<br />';

$isLoaded = true;
var_dump($isLoaded);

echo '<br />';

// Array
$friends = ['Kakashi', 'Magneto', 'Traniel'];
var_dump($friends);

echo '<br />';

// Object
$person = new stdClass();
var_dump($person);

echo '<br />';

//Null
$car = null;
var_dump($car);

// Resource
$file = fopen('sample.txt', 'r');
var_dump($file);
